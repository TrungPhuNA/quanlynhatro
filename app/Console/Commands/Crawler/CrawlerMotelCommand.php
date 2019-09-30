<?php

namespace App\Console\Commands\Crawler;

use Goutte\Client;
use Illuminate\Console\Command;

class CrawlerMotelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawler:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();
        $html  = file_get_html('https://mogi.vn/huyen-thanh-tri-ha-noi/thue-phong-tro-loi-di-rieng/cho-thue-phong-2-mat-thoang-ngo-147-trieu-khuc-id20399211');
        $configSelect = [
            'mt_name'     => [
                'select'  => 'div.ng-scope > div > h1',
                'element' => ''
            ],
            'mt_address'  => [
                'select'  => '#main > div.prop-intro.clearfix > div.ng-scope > div > div.address.nowrap',
                'element' => '',
            ],
            'mt_price'    => [
                'select'  => 'div.price',
                'element' => '',
            ],
            'mt_acreage'  => [
                'select'  => '#prop-info > ul:nth-child(1) > li:nth-child(2)',
                'element' => 'innertext',
            ],
            'mt_description' => [
                'select'     => '#property-info > div.prop-info-content',
                'element'    => '',
            ],
        ];

        $data = [];
        foreach ($configSelect as $key => $select) {
            $this->warn("Select: ".$select['select']);
            $content = $html->find($select['select'],0);

            if ($content)
            {
                dump($select['element']);
                $data[$key] = $select['element'] == 'innertext' ? $content->innertext : $content->plaintext ;
            }
        }
        $data['mt_menu_id'] = rand(1,2);
        print_r($data);
    }

    private function saveUrlWithSitemap()
    {
        $links = simplexml_load_file(public_path('data.xml'));
        foreach ($links as $link) {
            $this->info("Link: " . $link->loc);
            try {
                \DB::table('links')->insert(['url' => $link->loc]);
            } catch (\Exception $exception) {

            }
        }
    }
}
