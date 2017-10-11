<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;
use App\Midahalo;
use App\Habari;
use App\Machapisho;
use App\Katiba77;
use App\Katiba;
use App\History;

class JuaKatiba extends Controller
{
    public function index() {
      $midahalo = Midahalo::where('type', 'swahili')
                              ->orderBy('id', 'desc')
                              ->get();
      $news = Habari::where('type', 'swahili')
                        ->orderBy('id', 'desc')
                        ->get();

      $socials = [
          "https://twitter.com/JuaKatibaTz/status/911508472923074561",
          "https://twitter.com/JuaKatibaTz/status/911516983006519297",
          "https://twitter.com/JuaKatibaTz/status/908252671026622465",
          "https://twitter.com/JuaKatibaTz/status/908245446698692608",
          "https://twitter.com/ebeisnation/status/908246078486667264",
          "https://twitter.com/JuaKatibaTz/status/908234195348180992",
          "https://twitter.com/JuaKatibaTz/status/908236729898991616",
          "https://twitter.com/JuaKatibaTz/status/853852636390600704",
          "https://twitter.com/tanzania_bora/status/775643547102052353"
      ];

      $videos = [
          [
              "id" => "qCclNws1Z4w",
              "title" => "Utaratibu wa Kupiga Kura huwa unaendaje?"
          ],
          [
              "id" => "HS3RQm-bRp0",
              "title" => "Jinsi vijana wanajielezea kwa vipaji vyao-Kitaa"
          ],
          [
              "id" => "KRYTxpoLyRA",
              "title" => "Umejiandaa vipi kwa mwaka unaokuja? /Ndoto kubwa show?"
          ],
          [
              "id" => "egmgdYUBcpU",
              "title" => "Je wapiga kura wanamategemeo gani kwa uongozi mpya?"
          ],
          [
              "id" => "JUtszt_KDsc",
              "title" => "Umejiandaaje kimwili kwa ajili ya mwaka wa kazi?"
          ],
          [
              "id" => "XxFmByb-Yi4",
              "title" => "Hesabu Kila mahali /Ndoto Kubwa~ Interview"
          ],
      ];

      return view('index', compact('midahalo','news', 'socials', 'videos'));
    }

    public function index_en() {
      return view('index_en');
    }

    public function read_katiba() {
      $utangulizi = Content::where('context', 'utangulizi')
                               ->where('katiba', 'katiba77')
                               ->first();
      return view('level_two.read_katiba1977')
                                ->with('utangulizi', $utangulizi);
    }

    public function read_wananchi() {
      $utangulizi = Content::where('context', 'utangulizi')
                               ->where('katiba', 'katibaMpya')
                               ->first();
      return view('level_two.read_katiba_wananchi')
                                ->with('utangulizi', $utangulizi);
    }

    public function read_warioba() {
      return view('level_two.read_katiba_warioba');
    }

    public function history() {
      $history = History::orderBy('id', 'asc');
      $histories = $history->get()->map(function ($h){
          return collect([
              "year" => $h->date,
              "title" => strtoupper(substr($h->title, 0, 1)) . strtolower(substr($h->title, 1, strlen($h->title))),
              "description" => strip_tags($h->description)
          ]);
      });
      $years = $history->pluck('date');
//      return view('level_two.history')->with('history', $history);
      return view('history.index', compact('histories', 'years'));
    }

    public function machapisho() {
      $machapisho = Machapisho::orderBy('id', 'desc')->get();
      return view('level_two.machapisho')
                                ->with('machapisho', $machapisho);
    }

    public function faq() {
      return view('level_two.faq');
    }

    public function debates($id) {
      $mdahalo = Midahalo::where('id', $id)
                              ->where('type', 'swahili')
                              ->first();
      $midahalo = Midahalo::where('type', 'swahili')
                                ->orderBy('id', 'desc')
                                ->get();
      return view('level_two.debating', [
        'mdahalo' => $mdahalo,
        'midahalo' => $midahalo,
      ]);
    }

    public function fetch_ibara($katiba, $ibara) {
      $ibara = Katiba77::where('katiba', $katiba)
                            ->where('ibara', $ibara)
                            ->first();
      return response()->json([
          'ibara' => $ibara->description,
        ]);
    }

    public function download_katiba($type) {
      if($type == 1)
          $path = "assets/images/katiba.pdf";
      else if($type == 2)
          $path = "assets/images/katiba2.pdf";
      else if($type == 3)
          $path = "assets/images/katiba3.pdf";

      return $this->download($path);
    }

    public function download_chapisho($file_name) {
      $path = 'uploads/' . $file_name;
      return $this->download($path);
    }

    private function download($path) {
      if(file_exists($path)) {

        $headers = [
          'Content-Description' => 'File Transfer',
          'Content-Type' => 'application/pdf',
          'Content-Disposition' => 'attachment; filename="'.basename($path).'"',
          'Expires' => '0',
          'Cache-Control' => 'must-revalidate',
          'Pragma' =>  'public',
          'Content-Length' => filesize($path),
        ];

        return response()->download($path, basename($path), $headers);
      }
    }
}
