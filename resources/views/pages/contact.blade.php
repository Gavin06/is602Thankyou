@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">

        <div class="card-title">

            <h1>Contact Us</h1>

            <p class="lead">Please use this form to contact the site owner.</p>

        </div>

        <div class="card-body">

            <form action="/contact" , {{route('contact.store')}} method="post">

                @csrf

                <div class="form-group">

                    <label for="name">Name</label>

                    <input name="name" type="name" class="form-control" id="name" placeholder="ID">

                </div>

                <div class="form-group">

                    <label for="email">Email address</label>

                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">

                </div>

                <div class="form-group">

                    <label for="message">Message</label>

                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>

                </div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>

            </form>
        </div>
    </div>

@endsection