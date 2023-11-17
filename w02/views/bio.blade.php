<!-- resources/views/bio.blade.php -->

@extends('layouts.app')

@section('title', 'Bio')

@section('content')

<body class="bg-[#991b1b]">
    <div class="max-w-lg mx-auto my-20 bg-white rounded-lg shadow-md p-5">
      <img class="w-50 h-40 rounded-full mx-auto" src="{{ asset('image/IMG_7125.JPG')}}" alt="Profile picture">
      <h2 class="text-center text-2xl font-semibold mt-3">Ratchanon</h2>
      <p class="text-center text-gray-600 mt-1">SEBas</p>
      <div class="flex justify-center mt-5">
        <a href="https://www.facebook.com/profile.php?id=100007046770430" class="text-blue-500 hover:text-blue-700 mx-3">Facebook</a>
        <a href="https://www.instagram.com/bas_lego/" class="text-blue-500 hover:text-blue-700 mx-3">Instagram</a>
      </div>
      <div class="mt-5">
        <h3 class="text-xl font-semibold">Bio</h3>
        <p class="text-gray-600 mt-2">ผมชื่อ นาย รัชชานนท์ แก้วขาว ชื่อเล่น บาส อายุ 21 ปี กำลังศึกษาอยู่ที่ มหาวิทยาลัยราชภัฏรำไพพรรณี คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ สาขาเทคโนโลยีสารสนเทศ ปี 3</p>
      </div>
    </div>
  </body>
@endsection
