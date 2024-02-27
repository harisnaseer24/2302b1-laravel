<!doctype html>
<html lang="en">
    <head>
        <title>Register Student</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            
            <div class="container">
                <div class="col-md-10 mx-auto">
                   @if ($status=Session::get('success'))
                       <div
                        class="alert alert-primary alert-dismissible fade show"
                        role="alert"
                       >
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Close"
                        ></button>
                       
                        <strong>{{ $status }}</strong>.
                       </div>
                       
                   @endif
                    <h1 class="text-center text-success display-2">Edit Details of "{{ $student['username'] }}"</h1>
                    <form action="/editstudent/{{ $student['id'] }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="form-control my-3  " placeholder="username" name="username" value="{{ old('username',$student['username'])}}">
                        @error('username')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="email" class="form-control my-3  " placeholder="email" name="email" value="{{ old('email',$student['email'])}}">
                         @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="number" class="form-control my-3  " placeholder="contact" name="contact" value="{{ old('contact',$student['contact'])}}">
                         @error('contact')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="text" class="form-control my-3  " placeholder="city" name="city" value="{{ old('city',$student['city'])}}">
                         @error('city')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="file" class="form-control my-3  " placeholder="image" name="image" value="{{ old('image',$student['image'])}}">
                         @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <input type="submit" class="form-control my-3   btn btn-success"  name="submit">
                    </form>
                </div>
            </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
