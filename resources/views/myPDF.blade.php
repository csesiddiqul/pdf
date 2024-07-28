@extends('layouts.app')

@section('title', 'data ')
@section('content')
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>


    <div>
        <h1>Welcome to ItSolutionStuff.com - </h1>
        <p>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p class="custom-font">
            বিজ্ঞপ্তিতে বলা হয়, গ্যাস পাইপলাইনের জরুরি প্রতিস্থাপন কাজের জন্য আগামী ১১ জুলাই (বৃহস্পতিবার) সকাল ১০টা থেকে
            রাত ৮টা পর্যন্ত মোট ১০ ঘণ্টা কলাবাগান, কাঠাল বাগান, পূর্ব রাজাবাজার, গ্রিন রোড ও পান্থপথ এলাকায় বিদ্যমান সব
            শ্রেণির গ্রাহকের গ্যাস সরবরাহ বন্ধ থাকবে। এ ছাড়া, আশেপাশের এলাকায় গ্যাসের স্বল্পচাপ বিরাজ করতে পারে।

            গ্যাস গ্রাহকদের সাময়িক অসুবিধার জন্য আন্তরিকভাবে দুঃখ প্রকাশ করেছে তিতাস।
        </p>

        <br />
        <strong>Public Folder:</strong>
        <img src="{{ public_path('dummy.jpg') }}" style="width: 200px; height: 200px">

        <br />
        <strong>Storage Folder:</strong>
        <img src="{{ storage_path('app/public/dummy.jpg') }}" style="width: 200px; height: 200px">
    </div>


@endsection

@push('styles')
@endpush
