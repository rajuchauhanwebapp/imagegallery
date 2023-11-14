<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Image Gallery</title>
</head>
<body>
    <div class="container">
        <div class="mb-2">
            <div class="col-md-12 bg-dark text-center text-white py-4">
                <h2 class="text-uppercase mb-4">My Image Gallery</h2>
                <form action="{{ route('store_image') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="photo" id="id_photo">
                    <input type="submit" value="Upload" class="btn btn-info px-5">
                </form>
            </div>
        </div>

        <div class="row">
            @if (count($images) > 0)
                @foreach ($images as $item)
                    <div class="col-sm-6 col-md-3">
                        <div class="card my-2">
                            <img class="card-img-top" src="{{ asset('storage/'.$item->photo) }}" alt="" height="250px">
                            <div class="card-footer">
                                <small class="text-muted">{{$item->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else  
            @endif
        </div>
    </div>




    {{-- Bootstrap JS CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script>
        window.scrollTo(0,window.screen.height);
    </script>
</body>
</html>