<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\DiaryTaken;
use App\EraserTaken;
use App\PenTaken;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eloquent_way()
    {

        $penTaken = PenTaken::selectRaw('sum(amount)')
            ->whereColumn('buyer_id', 'buyers.id')
            ->getQuery();
        $diaryTaken = DiaryTaken::selectRaw('sum(amount)')
            ->whereColumn('buyer_id', 'buyers.id')
            ->getQuery();
        $eraserTaken = EraserTaken::selectRaw('sum(amount)')
            ->whereColumn('buyer_id', 'buyers.id')
            ->getQuery();

        $buyers = Buyer::select('buyers.*')
            ->selectSub($penTaken, 'total_pen_taken')
            ->selectSub($diaryTaken, 'total_diary_taken')
            ->selectSub($eraserTaken, 'total_eraser_taken')
            ->get();

        $buyer_total = [];
        $buyer_ids = [];
        foreach($buyers as $buyer){
            $buyer_total[] = $buyer->total_pen_taken+$buyer->total_diary_taken+$buyer->total_eraser_taken;
            $buyer_ids[$buyer->total_pen_taken+$buyer->total_diary_taken+$buyer->total_eraser_taken] = $buyer->id;
        }

        rsort($buyer_total);

        $buyer_id =  $buyer_ids[$buyer_total[1]];
        
        $buyer = Buyer::find($buyer_id);

        return view('second-buyer-eloquent', compact('buyer'));
    }

    public function no_eloquent_way(){
        $buyer = DB::select('
        SELECT b.*, (SELECT SUM(amount) FROM pen_taken WHERE pen_taken.buyer_id = b.id) AS pen, (SELECT SUM(amount) FROM eraser_taken WHERE eraser_taken.buyer_id = b.id) as eraser, (SELECT SUM(amount) FROM diary_taken WHERE diary_taken.buyer_id = b.id) as diary, ((SELECT SUM(amount) FROM pen_taken WHERE pen_taken.buyer_id = b.id)+(SELECT SUM(amount) FROM eraser_taken WHERE eraser_taken.buyer_id = b.id)+(SELECT SUM(amount) FROM diary_taken WHERE diary_taken.buyer_id = b.id)) as total  FROM buyers b ORDER BY total DESC LIMIT 1 OFFSET 1
        ');

        $buyer = $buyer[0];
        return view('second-buyer-no-eloquent', compact('buyer'));
    }
}
