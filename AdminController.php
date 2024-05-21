<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = [
            [
                "nama" => "Muhammad Fakhrizal Garnindyo",
                "umur" => 19,
                "email" => "fakhrizalgarnindyo@gmail.com",
                "kampus" => "STT Terpadu Nurul Fikri",
                "alamat" => "Bojonggede, Kabupaten Bogor",
                "jabatan" => "Software Engineer",
                "gaji" => 5000000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Agus Santoso",
                "umur" => 25,
                "email" => "agussantoso@gmail.com",
                "kampus" => "Universitas Indonesia",
                "alamat" => "Depok, Jawa Barat",
                "jabatan" => "Data Analyst",
                "gaji" => 6000000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Budi Setiawan",
                "umur" => 30,
                "email" => "budisetiawan@gmail.com",
                "kampus" => "Institut Teknologi Bandung",
                "alamat" => "Bandung, Jawa Barat",
                "jabatan" => "Project Manager",
                "gaji" => 8000000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Citra Lestari",
                "umur" => 28,
                "email" => "citralestari@gmail.com",
                "kampus" => "Universitas Gadjah Mada",
                "alamat" => "Yogyakarta, D.I. Yogyakarta",
                "jabatan" => "UI/UX Designer",
                "gaji" => 7000000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Dewi Sartika",
                "umur" => 27,
                "email" => "dewisartika@gmail.com",
                "kampus" => "Universitas Brawijaya",
                "alamat" => "Malang, Jawa Timur",
                "jabatan" => "Backend Developer",
                "gaji" => 6500000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Eko Prasetyo",
                "umur" => 35,
                "email" => "ekoprasetyo@gmail.com",
                "kampus" => "Universitas Airlangga",
                "alamat" => "Surabaya, Jawa Timur",
                "jabatan" => "DevOps Engineer",
                "gaji" => 7500000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Fajar Nugroho",
                "umur" => 29,
                "email" => "fajarnugroho@gmail.com",
                "kampus" => "Universitas Diponegoro",
                "alamat" => "Semarang, Jawa Tengah",
                "jabatan" => "Frontend Developer",
                "gaji" => 6000000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Gita Andini",
                "umur" => 24,
                "email" => "gitaandini@gmail.com",
                "kampus" => "Universitas Padjadjaran",
                "alamat" => "Bandung, Jawa Barat",
                "jabatan" => "Mobile Developer",
                "gaji" => 6800000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Hendra Wijaya",
                "umur" => 31,
                "email" => "hendrawijaya@gmail.com",
                "kampus" => "Universitas Sumatera Utara",
                "alamat" => "Medan, Sumatera Utara",
                "jabatan" => "System Analyst",
                "gaji" => 7200000,
                "status" => "Aktif"
            ],
            [
                "nama" => "Indah Pertiwi",
                "umur" => 26,
                "email" => "indahpertiwi@gmail.com",
                "kampus" => "Universitas Hasanuddin",
                "alamat" => "Makassar, Sulawesi Selatan",
                "jabatan" => "Quality Assurance",
                "gaji" => 6400000,
                "status" => "Aktif"
            ]
        ];

        return view('admin.index', ['username' => 'Muhammad Fakhrizal Garnindyo', 'pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
