<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertemuan 1</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        h2 {
            color: yellow;
        }

        #par1 {
            background-color: blue
        }

        .red {
            color: red;
            background-color: red
        }

        .aqua {
            color: aqua
        }

        .aqua p {
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            font-style: italic;
            text-align: center;
            border: 10px;
            border-radius: 20px;
            border-color: green;
            border-style: solid;
            padding: 10px;
            margin: 5px;
        }

        .red,
        a {
            color: gray
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <h1 style="color: blue; background-color: green">Heading 1</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <div class="aqua" style="display: flex; justify-content: center; align-content: center; flex-direction: column">
        <h5 style="display: inline; top: ">Heading 5</h5>
        <h6 style="display: inline">Heading 6</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sapiente omnis voluptas nihil vitae ipsum.
            Impedit eligendi maiores veritatis hic ut exercitationem debitis expedita ipsum, eveniet repellat laborum,
            vitae error.</p>
    </div>

    <p id="par1"><b>Lorem</b> ipsum dolor sit amet consectetur adipisicing elit. Adipisci libero, odio perspiciatis
        doloribus reprehenderit in ratione vitae officia dolorem provident maxime porro, sequi illum sapiente tempore
        quidem minima quis nihil.</p>
    <p class="aqua red"><strong>Lorem</strong> ipsum dolor sit amet, consectetur adipisicing elit. Similique minima,
        voluptate commodi non itaque illo numquam praesentium esse, reprehenderit alias deleniti veritatis nisi
        voluptatibus et. Quaerat hic ipsa labore magni.</p>
    {{-- ctrl + / --}}
    {{-- alt+shift+arrow --}}
    <a href="https://google.com" target="_blank">Google</a>
    <img src="{{asset('assets/1.jpg')}}" alt="foto" style="width: 500px; height: 500px;">
    <br style="background-color: red">
    <hr>
    <p class="red">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste exercitationem modi enim deserunt
        laborum dolore aliquid odit fuga eos inventore vitae quos consequatur et assumenda molestias possimus, ad,
        necessitatibus hic.</p>

    <form action="" method="POST">
        @csrf
        @method('PATCH')
        <label for="name">Nama</label>
        <input type="text" name="nama" id="name" placeholder="Isi nama anda">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Isi email anda">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Isi password anda">

        <button type="submit">Submit</button>
    </form>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <tr>
            <td>Ryan</td>
            <td>19</td>
        </tr>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
