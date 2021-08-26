@extends('layouts.main')
@section('title') About Us @endsection
@section('body')
    <div class="container my-3">
        <nav class="breadcrumb">
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="{{route('page.index')}}">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </nav>
    </div>
    <section id="abt-us" class="my-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>About Us</h1>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro accusantium adipisci eum. Aliquam deleniti ea tempora porro, animi iure, odio ratione, laudantium commodi veritatis officia id sit? Officia qui, iure delectus nihil nesciunt magni, tenetur similique repellendus ea facere sapiente ipsa cumque blanditiis ratione hic a. Itaque aperiam necessitatibus expedita dolorem odio laudantium, ipsa cumque explicabo doloremque iusto nobis mollitia fugit, nemo tempore vero omnis vitae, consectetur commodi possimus cupiditate ipsum ratione. Dolor dolores repudiandae iste tempora numquam velit quaerat voluptatum deserunt rem facere suscipit, veniam eveniet quos aliquam modi et. Quas nobis veniam explicabo labore accusamus dolore, aspernatur provident aperiam enim ipsum, corporis ullam repellat dicta veritatis, reiciendis voluptatibus corrupti unde! Iste quis optio magnam veritatis cupiditate perspiciatis ipsum earum ipsa magni, beatae, perferendis at corrupti quam sunt doloremque, enim unde. Nihil provident voluptatem optio nulla nam libero, numquam incidunt ipsa doloremque a rem culpa, qui non quam molestias debitis assumenda facilis accusantium eos saepe, ipsum eum placeat nobis? Est qui iste cum perferendis dolorum, quae sint, saepe officiis harum, vitae architecto? Quod iusto pariatur nam veniam voluptates, neque earum ab, possimus modi rerum repellat, ea commodi velit dignissimos provident rem! Earum consequatur officiis aut perspiciatis molestiae consectetur, quaerat labore! Doloribus aliquam porro in facilis, odio dolore aspernatur eius beatae aperiam molestias ea officia rerum quaerat ut impedit, et, labore atque aliquid soluta corrupti magnam! Neque reiciendis ullam velit sint aspernatur, fugit incidunt unde ab omnis ipsum dicta corporis alias voluptatibus quaerat eligendi saepe dignissimos provident consectetur magni quisquam illum ea! Veritatis repudiandae cum debitis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro accusantium adipisci eum. Aliquam deleniti ea tempora porro, animi iure, odio ratione, laudantium commodi veritatis officia id sit? Officia qui, iure delectus nihil nesciunt magni, tenetur similique repellendus ea facere sapiente ipsa cumque blanditiis ratione hic a. Itaque aperiam necessitatibus expedita dolorem odio laudantium, ipsa cumque explicabo doloremque iusto nobis mollitia fugit, nemo tempore vero omnis vitae, consectetur commodi possimus cupiditate ipsum ratione. Dolor dolores repudiandae iste tempora numquam velit quaerat voluptatum deserunt rem facere suscipit, veniam eveniet quos aliquam modi et. Quas nobis veniam explicabo labore accusamus dolore, aspernatur provident aperiam enim ipsum, corporis ullam repellat dicta veritatis, reiciendis voluptatibus corrupti unde! Iste quis optio magnam veritatis cupiditate perspiciatis ipsum earum ipsa magni, beatae, perferendis at corrupti quam sunt doloremque, enim unde. Nihil provident voluptatem optio nulla nam libero, numquam incidunt ipsa doloremque a rem culpa, qui non quam molestias debitis assumenda facilis accusantium eos saepe, ipsum eum placeat nobis? Est qui iste cum perferendis dolorum, quae sint, saepe officiis harum, vitae architecto? Quod iusto pariatur nam veniam voluptates, neque earum ab, possimus modi rerum repellat, ea commodi velit dignissimos provident rem! Earum consequatur officiis aut perspiciatis molestiae consectetur, quaerat labore! Doloribus aliquam porro in facilis, odio dolore aspernatur eius beatae aperiam molestias ea officia rerum quaerat ut impedit, et, labore atque aliquid soluta corrupti magnam! Neque reiciendis ullam velit sint aspernatur, fugit incidunt unde ab omnis ipsum dicta corporis alias voluptatibus quaerat eligendi saepe dignissimos provident consectetur magni quisquam illum ea! Veritatis repudiandae cum debitis.</p>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.testimonials' , [
        'testimonials' => $testimonials
    ])
    @include('layouts.clients-logo')
@endsection
