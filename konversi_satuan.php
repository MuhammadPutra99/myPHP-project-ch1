<?php

$post1 = 1;
$post2 = 2;

echo "1. Konversi PANJANG" . "\n";
echo "2. Konversi BERAT" . "\n";
echo "Pilih nomer berapa? ";

$input = trim(fgets(STDIN));

echo "\n";

// IF STATEMENT //
if ($input == $post1) {

    // Konversi PANJANG
    $pil_1 = 1;
    echo "1. meter ke centimeter\n";

    $pil_2 = 2;
    echo "2. meter ke kilometer\n";

    $pil_3 = 3;
    echo "3. meter ke milimeter\n";

    $pil_4 = 4;
    echo "4. centimeter ke meter\n";

    $pil_5 = 5;
    echo "5. kilometer ke meter\n";

    $pil_6 = 6;
    echo "6. milimeter ke meter\n";

    echo "\n";
    echo "Kamu ingin konversi apa? ";
    $pjg_input = trim(fgets(STDIN));

    echo "\n";

    // KONVERSI PANJANG
    if ($pjg_input == $pil_1) {
        echo "Masukkan nilai (m) = ";
        $input_meter = trim(fgets(STDIN));

        echo "\n";

        $jawaban_meter_centimeter = $input_meter * 100;
        echo "Jawaban Kamu = $jawaban_meter_centimeter" . " cm";

    } elseif ($pjg_input == $pil_2) {
        echo "Masukkan nilai (m) = ";
        $input_meter = trim(fgets(STDIN));

        echo "\n";

        $jawaban_meter_kilometer = $input_meter / 1000;
        echo "Jawaban Kamu = $jawaban_meter_kilometer" . " km";

    } elseif ($pjg_input == $pil_3) {
        echo "Masukkan nilai (m) = ";
        $input_meter = trim(fgets(STDIN));

        echo "\n";

        $jawaban_meter_milimeter = $input_meter * 1000;
        echo "Jawaban Kamu = $jawaban_meter_milimeter" . " mm";

    } elseif ($pjg_input == $pil_4) {
        echo "Masukkan nilai (cm) = ";
        $input_centimeter = trim(fgets(STDIN));

        echo "\n";

        $jawaban_centimeter_meter = $input_centimeter / 100;
        echo "Jawaban Kamu = $jawaban_centimeter_meter" . " m";

    } elseif ($pjg_input == $pil_5) {
        echo "Masukkan nilai (km) = ";
        $input_kilometer = trim(fgets(STDIN));

        echo "\n";

        $jawaban_kilometer_meter = $input_kilometer * 1000;
        echo "Jawaban Kamu = $jawaban_kilometer_meter" . " m";
        
    } elseif ($pjg_input == $pil_6) {
        echo "Masukkan nilai (mm) = ";
        $input_milimeter = trim(fgets(STDIN));

        echo "\n";

        $jawaban_milimeter_meter = $input_milimeter / 1000;
        echo "Jawaban Kamu = $jawaban_milimeter_meter" . " m";

    } else {
        echo "Masukkan input yang benar!";
    }

} elseif ($input == $post2) {

    // Konversi BERAT
    $cho_1 = 1;
    echo "1. Kilogram ke Gram\n";

    $cho_2 = 2;
    echo "2. Kilogram ke Ton\n";

    $cho_3 = 3;
    echo "3. Kilogram ke Miligram\n";

    $cho_4 = 4;
    echo "4. Kilogram ke Pound\n";

    echo "\n";
    echo "Kamu ingin konversi apa? ";
    $brt_input = trim(fgets(STDIN));

    echo "\n";

    // KONVERSI BERAT
    if ($brt_input == $cho_1) {
        echo "Masukkan nilai (kg) = ";
        $input_kilo = trim(fgets(STDIN));

        echo "\n";

        $jawaban_kilo_gram = $input_kilo * 1000;
        echo "Jawaban Kamu = $jawaban_kilo_gram" . " gr";

    } elseif ($brt_input == $cho_2) {
        echo "Masukkan nilai (kg) = ";
        $input_kilo = trim(fgets(STDIN));

        echo "\n";

        $jawaban_kilo_ton = $input_kilo / 1000;
        echo "Jawaban Kamu = $jawaban_kilo_ton" . " ton";

    } elseif ($brt_input == $cho_3) {
        echo "Masukkan nilai (kg) = ";
        $input_kilo = trim(fgets(STDIN));

        echo "\n";

        $jawaban_kilo_mili = $input_kilo * 1000000;
        echo "Jawaban Kamu = $jawaban_kilo_mili" . " mg";

    } elseif ($brt_input == $cho_4) {
        echo "Masukkan nilai (kg) = ";
        $input_kilo = trim(fgets(STDIN));

        echo "\n";

        $jawaban_kilo_pound = $input_kilo * 2.20462;
        echo "Jawaban Kamu = $jawaban_kilo_pound" . " pound";

    } else {
        echo "Masukkan input yang benar!";
    }

} else {
    echo "Maaf, hanya tersedia pilihan 1 & 2\n";
    exit();
}