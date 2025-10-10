<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path' => 'bgiVKavVO7XnS37cm5WDVg12dg5L4YXDCbRv3nJF.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 20:33:59',
                'updated_at' => '2025-10-10 20:33:59',
            ),
            1 => 
            array (
                'id' => 2,
                'path' => 'SxUrcLXTdYUcZmNwfAB8XNZyRKrpL2AE62FsEBHT.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 20:33:59',
                'updated_at' => '2025-10-10 20:33:59',
            ),
            2 => 
            array (
                'id' => 3,
                'path' => 'gD1ZleV4Ba7X0FxZlmvhstwwhZSfBkMstCUvf7ys.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 20:33:59',
                'updated_at' => '2025-10-10 20:33:59',
            ),
            3 => 
            array (
                'id' => 4,
                'path' => 'jo2ASvVnOAbobOQglxTKHQ059noruKYvXqSyJo2S.webp',
                'is_cover' => 1,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 20:33:59',
                'updated_at' => '2025-10-10 20:33:59',
            ),
            4 => 
            array (
                'id' => 5,
                'path' => 'CQPcJrv9Q8bZuXxeiIZHOnXoEzhnH3F8tF3ZJGkO.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 20:33:59',
                'updated_at' => '2025-10-10 20:33:59',
            ),
            5 => 
            array (
                'id' => 6,
                'path' => '6xSbBRzOKMYf65THueSxs4WNKtfeR8Y8pTQMMN23.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:10:53',
                'updated_at' => '2025-10-10 21:10:53',
            ),
            6 => 
            array (
                'id' => 7,
                'path' => 'lIc8M3X3UIjFpEVMHFCw5Azwn6b90s0bpM76807U.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:10:53',
                'updated_at' => '2025-10-10 21:10:53',
            ),
            7 => 
            array (
                'id' => 8,
                'path' => 'MgMLwZeb1w6NLayg9OAC1qROEsoPUoieIgQSChk6.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:10:53',
                'updated_at' => '2025-10-10 21:10:53',
            ),
            8 => 
            array (
                'id' => 9,
                'path' => 'qXkpIRhbojF1GbKzWVPQda3DsQRIMIpNABUsp5ro.webp',
                'is_cover' => 1,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:10:53',
                'updated_at' => '2025-10-10 21:10:53',
            ),
            9 => 
            array (
                'id' => 10,
                'path' => '5nF3iL81V2clI9oNbTnhc6eqHYjv4E9eyN9sdqMI.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:10:53',
                'updated_at' => '2025-10-10 21:10:53',
            ),
            10 => 
            array (
                'id' => 11,
                'path' => 'Esrs4228WypV6ixL3fqPjrDxFMA73MHjDLQscD3m.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:10:53',
                'updated_at' => '2025-10-10 21:10:53',
            ),
            11 => 
            array (
                'id' => 12,
                'path' => 'EE8BbF03XzrRgrADmiyx21fIrNvVPv3NDd1o4Q2K.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:10:53',
                'updated_at' => '2025-10-10 21:10:53',
            ),
            12 => 
            array (
                'id' => 13,
                'path' => 'kh0QaRn4ryNnScA3mR6BM6KzQm6RnhPxpV2mXOS3.webp',
                'is_cover' => 0,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:10:53',
                'updated_at' => '2025-10-10 21:10:53',
            ),
            13 => 
            array (
                'id' => 14,
                'path' => 'lxju83Lo87BV6kfMsBK1cQZiMzKhoirBRZQA4kGA.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:17:10',
                'updated_at' => '2025-10-10 21:17:10',
            ),
            14 => 
            array (
                'id' => 15,
                'path' => '2XisqoCYYXxONkt8OMC65kjNse2UZB761OqGqPkV.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:17:10',
                'updated_at' => '2025-10-10 21:17:10',
            ),
            15 => 
            array (
                'id' => 16,
                'path' => 'PtPXT3DghnUuLMfXaPmyXwRRKb6vkHVB0oThL7uZ.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:17:10',
                'updated_at' => '2025-10-10 21:17:10',
            ),
            16 => 
            array (
                'id' => 17,
                'path' => 'tIEtOdt6hDNrapJxNoPPjtfmGoyD1WRPMRm68yrD.webp',
                'is_cover' => 0,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:17:10',
                'updated_at' => '2025-10-10 21:17:10',
            ),
            17 => 
            array (
                'id' => 18,
                'path' => 'L2DOqEqiSidUIE16PQPRR903PJvahg3QcchZcvUW.webp',
                'is_cover' => 1,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:17:10',
                'updated_at' => '2025-10-10 21:17:10',
            ),
            18 => 
            array (
                'id' => 19,
                'path' => 'neUdUTFWd1tcEZnfHKiiSZoP6eUHLlEaQdju0Q1e.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:20:11',
                'updated_at' => '2025-10-10 21:20:11',
            ),
            19 => 
            array (
                'id' => 20,
                'path' => 'JGzVAWWQnEym6cT5DuBb5bBocKA3t1BMjwegk4p6.webp',
                'is_cover' => 1,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:20:11',
                'updated_at' => '2025-10-10 21:20:11',
            ),
            20 => 
            array (
                'id' => 21,
                'path' => '4L9f3rVwa2p0uIf6dEs4Hz9G086vU51RQrh00wCV.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:20:11',
                'updated_at' => '2025-10-10 21:20:11',
            ),
            21 => 
            array (
                'id' => 22,
                'path' => 'cvBu3yneDFAn9Aim9P31CsNF1tYg0Xhl67XSz1b3.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:20:11',
                'updated_at' => '2025-10-10 21:20:11',
            ),
            22 => 
            array (
                'id' => 23,
                'path' => '0qekoZfEX7yp0UwTWwORmMGLPfni0CtMNOrdHtuH.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:20:11',
                'updated_at' => '2025-10-10 21:20:11',
            ),
            23 => 
            array (
                'id' => 24,
                'path' => 'vMZOIEnH0EtvyznkuEL0dHlYujKm5ZA89wpzqCdc.webp',
                'is_cover' => 0,
                'product_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:20:11',
                'updated_at' => '2025-10-10 21:20:11',
            ),
            24 => 
            array (
                'id' => 25,
                'path' => 'DZbwB7IgM8JGsumk91yQAHjkIEBK2rBsPYgBtxL3.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:22:51',
                'updated_at' => '2025-10-10 21:22:51',
            ),
            25 => 
            array (
                'id' => 26,
                'path' => 'p7JA2QSOjUNh7qdIrgzjJrn56eWF0i3hFZ8uuQXw.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:22:51',
                'updated_at' => '2025-10-10 21:22:51',
            ),
            26 => 
            array (
                'id' => 27,
                'path' => 'e6oO1EVwupHL9gfGulYt0hf0WvTegJnwBGylz0eb.webp',
                'is_cover' => 1,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:22:51',
                'updated_at' => '2025-10-10 21:22:51',
            ),
            27 => 
            array (
                'id' => 28,
                'path' => 'dAZPGd7busK4yMBB8cKjvyz4w7I3c1PCed4lMETL.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:22:51',
                'updated_at' => '2025-10-10 21:22:51',
            ),
            28 => 
            array (
                'id' => 29,
                'path' => 'Ovu7gX2hpkl44jVGaFmmWoM2dTUUNB2MLJyqW5Hk.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:22:51',
                'updated_at' => '2025-10-10 21:22:51',
            ),
            29 => 
            array (
                'id' => 30,
                'path' => 'F1Jp9tGkxmn51jVuBpFLqnYCGN2LahMeBAvq0y5G.webp',
                'is_cover' => 0,
                'product_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:22:51',
                'updated_at' => '2025-10-10 21:22:51',
            ),
            30 => 
            array (
                'id' => 31,
                'path' => 'CnqCJEtUjO8WlNVv9vzBqRWk7mc3eC3KllzFio54.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:26:15',
                'updated_at' => '2025-10-10 21:26:15',
            ),
            31 => 
            array (
                'id' => 32,
                'path' => 'wpEcEKvVcErOMpp9Uda7qvi8PR82ryf4fpg9AjfL.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:26:15',
                'updated_at' => '2025-10-10 21:26:15',
            ),
            32 => 
            array (
                'id' => 33,
                'path' => 'SEBoDPGMOzbj88Ehx311weRTog22BI4AzHgVlE0m.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:26:15',
                'updated_at' => '2025-10-10 21:26:15',
            ),
            33 => 
            array (
                'id' => 34,
                'path' => 'UgVdvWYdFZHCmVFR3gNjYSOcDnH7EWZ0cmKyIN57.webp',
                'is_cover' => 0,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:26:15',
                'updated_at' => '2025-10-10 21:26:15',
            ),
            34 => 
            array (
                'id' => 35,
                'path' => 'sLesvjDFMN5TPU5LU8Dc0ZwEwe0BMiQMxM9HMvwb.webp',
                'is_cover' => 1,
                'product_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:26:15',
                'updated_at' => '2025-10-10 21:26:15',
            ),
            35 => 
            array (
                'id' => 36,
                'path' => '6fd4LIInTbG0RvwiLgsinWVHveSeodgCuoqT0ccZ.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:29:40',
                'updated_at' => '2025-10-10 21:29:40',
            ),
            36 => 
            array (
                'id' => 37,
                'path' => 'dEK7OrTaGr6ShXk3cLKGJCev5Z4lVxv8KeFlVbd1.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:29:40',
                'updated_at' => '2025-10-10 21:29:40',
            ),
            37 => 
            array (
                'id' => 38,
                'path' => '154OK977rmycqDgAkIPbTAuss9lmVoDxx0GZ6PYM.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:29:40',
                'updated_at' => '2025-10-10 21:29:40',
            ),
            38 => 
            array (
                'id' => 39,
                'path' => 'GFVll1cBi3Ks93FKAr6AJHFxAvQcibpmH53kxfRP.webp',
                'is_cover' => 1,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:29:40',
                'updated_at' => '2025-10-10 21:29:40',
            ),
            39 => 
            array (
                'id' => 40,
                'path' => 'vipcPLbCRAjNpgMXzh4AMelC3TgC4wrfzKHYUTNi.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:29:40',
                'updated_at' => '2025-10-10 21:29:40',
            ),
            40 => 
            array (
                'id' => 41,
                'path' => 'xbNpWi2DMxgBPRXbFkx1u63nNr51CzY1smoI05Mk.webp',
                'is_cover' => 0,
                'product_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:29:40',
                'updated_at' => '2025-10-10 21:29:40',
            ),
            41 => 
            array (
                'id' => 42,
                'path' => 'mzil5fdV98XlucSdG6WyyllE18mTAPAHhPcCDMvl.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:32:19',
                'updated_at' => '2025-10-10 21:32:19',
            ),
            42 => 
            array (
                'id' => 43,
                'path' => 'h6dXiqBAySLoU5k4AaTFgM3BO1hf7PxGf9D3Xeee.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:32:19',
                'updated_at' => '2025-10-10 21:32:19',
            ),
            43 => 
            array (
                'id' => 44,
                'path' => 'Pg8AGKruJBduVTYAUQxniUWBYv7RDOZbvd6nzj4H.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:32:19',
                'updated_at' => '2025-10-10 21:32:19',
            ),
            44 => 
            array (
                'id' => 45,
                'path' => '5OwXNneepRHLB3vW1qf2g8uTujYshlRGibxNW8b2.webp',
                'is_cover' => 0,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:32:19',
                'updated_at' => '2025-10-10 21:32:19',
            ),
            45 => 
            array (
                'id' => 46,
                'path' => '634Cjok88Lfz0fZVKFtXIlMnF35vPM5Y1ZvnpxBC.webp',
                'is_cover' => 1,
                'product_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:32:19',
                'updated_at' => '2025-10-10 21:32:19',
            ),
            46 => 
            array (
                'id' => 47,
                'path' => '6LrFcYOngdp73ku3eGWbhqSgIWTJgW5Vb0D96CEf.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:35:14',
                'updated_at' => '2025-10-10 21:35:14',
            ),
            47 => 
            array (
                'id' => 48,
                'path' => 'piqVka8a3sV5N4Smbhv8tzCrr9BbNPG0fOvlJuJ6.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:35:14',
                'updated_at' => '2025-10-10 21:35:14',
            ),
            48 => 
            array (
                'id' => 49,
                'path' => 'H6nDjozDizU1wiRq7MsCIy0XICG2ZjjqGDLxGtb6.webp',
                'is_cover' => 0,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:35:14',
                'updated_at' => '2025-10-10 21:35:14',
            ),
            49 => 
            array (
                'id' => 50,
                'path' => 'DTmgSSNf9RebA36hy2dARvR93VMXjuyTL1R1Dosv.webp',
                'is_cover' => 1,
                'product_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:35:14',
                'updated_at' => '2025-10-10 21:35:14',
            ),
            50 => 
            array (
                'id' => 51,
                'path' => 'dqoBA56wH1v5eoj9b7czbSxucYnExJDLN2FyPUdT.webp',
                'is_cover' => 1,
                'product_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:37:46',
                'updated_at' => '2025-10-10 21:37:46',
            ),
            51 => 
            array (
                'id' => 52,
                'path' => 'S4MDY5IPCxVEaLuJ92tjiX92HSHDACVe8XjdlY02.webp',
                'is_cover' => 0,
                'product_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:37:46',
                'updated_at' => '2025-10-10 21:37:46',
            ),
            52 => 
            array (
                'id' => 53,
                'path' => 'gIKE1UMIb7JJa4ZpVln1v5JcHb4XsQJKMoOmmgMA.webp',
                'is_cover' => 0,
                'product_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:37:46',
                'updated_at' => '2025-10-10 21:37:46',
            ),
            53 => 
            array (
                'id' => 54,
                'path' => 'gu2CeCEHRymYcMbyW6eoGuAQFawNrLbix0DkobT7.webp',
                'is_cover' => 0,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            54 => 
            array (
                'id' => 55,
                'path' => 'OmiGNxjvlDWwCtk0g0JELl9mOWZAmcRBtu6GA6nM.webp',
                'is_cover' => 1,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            55 => 
            array (
                'id' => 56,
                'path' => 'WzvJ0yEs5RPYw31wUI8khI1jPQ5wqEAbd2jDMB40.webp',
                'is_cover' => 0,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            56 => 
            array (
                'id' => 57,
                'path' => 'jzNWFTgVSRTMBMADxvpjDsqHWiFN1Wv7t7J8Prmf.webp',
                'is_cover' => 0,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            57 => 
            array (
                'id' => 58,
                'path' => 'OhTlF3uNNDEsVuAYevm2TDZtFrJDV4NDM6f0fZHl.webp',
                'is_cover' => 0,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            58 => 
            array (
                'id' => 59,
                'path' => 'kZ5MXluMeq30G0I7gVCs5B2nFjA9JJ2JdxCcsyOQ.webp',
                'is_cover' => 0,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            59 => 
            array (
                'id' => 60,
                'path' => 'bmyVc0ue9lYz2U9SvXLlOlVFrTMsPR0n9pCy9dCi.webp',
                'is_cover' => 0,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            60 => 
            array (
                'id' => 61,
                'path' => 'qYbZ4qIdAZiWwJqvZuJF5r7xGXgb59lhUtfVTYoI.webp',
                'is_cover' => 0,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            61 => 
            array (
                'id' => 62,
                'path' => 'WJss8roSsp1uibykigXEnOw09D8xOQqHQOHeJF2D.webp',
                'is_cover' => 0,
                'product_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:40:11',
                'updated_at' => '2025-10-10 21:40:11',
            ),
            62 => 
            array (
                'id' => 63,
                'path' => 'a1e3cRc5reXwhWA7kfi0V7oEQWe4VpHWqHLxS7da.webp',
                'is_cover' => 0,
                'product_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:42:39',
                'updated_at' => '2025-10-10 21:42:39',
            ),
            63 => 
            array (
                'id' => 64,
                'path' => '1zloYLTkE58rL3QTimRawmnzEHkhSCCDEnQWeblp.webp',
                'is_cover' => 0,
                'product_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:42:39',
                'updated_at' => '2025-10-10 21:42:39',
            ),
            64 => 
            array (
                'id' => 65,
                'path' => 'ttEjkSY9dn8Nxf5lRkwlHBwhS1WWUQXWltvjxXrc.webp',
                'is_cover' => 1,
                'product_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:42:39',
                'updated_at' => '2025-10-10 21:42:39',
            ),
            65 => 
            array (
                'id' => 66,
                'path' => 'PPPNqa6IPFkQgtMecLts4rsclPL7zrSTAZhSNWVY.webp',
                'is_cover' => 0,
                'product_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:42:39',
                'updated_at' => '2025-10-10 21:42:39',
            ),
            66 => 
            array (
                'id' => 67,
                'path' => '9u6aEWwhOGFjWi9UU0OFbG6vsnzsIuN3gcaOFbuX.webp',
                'is_cover' => 0,
                'product_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:42:39',
                'updated_at' => '2025-10-10 21:42:39',
            ),
            67 => 
            array (
                'id' => 68,
                'path' => 'xhDDjDrKZJwpYScYHVLa2boLu8mgVn0VgWUQC1ZZ.webp',
                'is_cover' => 0,
                'product_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:42:39',
                'updated_at' => '2025-10-10 21:42:39',
            ),
            68 => 
            array (
                'id' => 69,
                'path' => '3OtqPGZt0lGjPpoM1Bt6MJ0yBKawhLyvxnRfJnV4.webp',
                'is_cover' => 0,
                'product_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2025-10-10 21:42:39',
                'updated_at' => '2025-10-10 21:42:39',
            ),
        ));
        
        
    }
}