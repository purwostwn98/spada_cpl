<?php
function get_token_kurikulum()
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.ums.ac.id/token/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('username' => 'mycpl', 'password' => '10oWUWrF4Zt&', 'consumer_id' => 'mhi595'),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response = json_decode($response, true);
    return $response;
}

function akses_kurikulum($url)
{
    $session = \Config\Services::session();
    $token = $session->get('token');
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.ums.ac.id/kurikulum_api/' . $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $session->get('token_kurikulum')
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response = json_decode($response, true);
    return $response;
}

function get_cpl($id_lembaga, $tahun)
{
    $url = 'v1/prodi/' . $id_lembaga . '/cpl?tahun=' . $tahun;
    return akses_kurikulum($url);
}

function get_mk_kurikulum($id_lembaga, $tahun)
{
    if ($tahun == 19011998) {
        $url = 'v1/prodi/' . $id_lembaga . '/matakuliah';
    } else {
        $url = 'v1/prodi/' . $id_lembaga . '/matakuliah?tahun=' . $tahun;
    }
    return akses_kurikulum($url);
}

function get_cpmk_kurikulum($kode_mk)
{
    $url = 'v1/matakuliah/' . $kode_mk . '/cpmk';
    return akses_kurikulum($url);
}

function get_mk_subcpmk($id_lembaga)
{
    $url = 'v1/prodi/' . $id_lembaga . '/matakuliah_with_cpmk';
    return akses_kurikulum($url);
}
