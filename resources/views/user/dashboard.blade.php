@extends('layout.main')
@section('content')

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  #wrapper {
    display: flex;
    height: 100vh;
  }

  #sidebar {
    flex: 0 0 250px;
    background-color: 	#ffa31a;
    color: #fff;
    border-right: 1px solid #fff;
    overflow-y: auto; /* Add scrollbar if needed */
  }

  #sidebar h3 {
    margin-top: 0;
    padding: 20px;
  }

  #sidebar .nav-link {
    color: #fff;
    transition: padding-left 0.3s,border-color 0.3s ease;
  }

  #sidebar .nav-link:hover {
    border-bottom: solid;
    border-color: rgb(35, 33, 33);
    padding-left: 50px;
    cursor: pointer;
    background-color: rgb(13, 113, 143);
    
  }

  #content {
    flex: 1;
    padding: 20px;
    background-color: #292929;
    color: white;
  }

  #content h2 {
    margin-top: 0;
  }
</style>
</head>
<body>
<div id="wrapper">
  <!-- Sidebar -->
  <div id="sidebar">
    <h3>Admin Panel</h3>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active"  onclick="loadContent('{{ route('user.create') }}', 'create')">Create User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="loadContent('{{ route('user.edit') }}', 'edit')">Edit User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  onclick="loadContent('{{ route('user.delete') }}', 'delete')">Delete User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  onclick="loadContent('{{ route('user.gender') }}', 'gender')">Genders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="loadContent('{{ route('user.view') }}', 'view')">View</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="loadContent('{{ route('user.viewspecific') }}', 'viewspecific')">View Specific Data</a>
      </li>
    </ul>
  </div>
  <!-- Page content -->
  <div id="content">
    <h2>Dashboard</h2>
    @yield('dynamic_content')
    <!-- Place your dashboard content here -->
  </div>
</div>


<script>
  //This is to load the page inside the Content section to not redirecting to the page
  function loadContent(route, content) {
    fetch(route)
      .then(response => response.text())
      .then(data => {
        // Update the content div with the fetched data
        document.getElementById('content').innerHTML = data;
        // Update the URL with the content type
        history.pushState({}, content, route);
      })
      .catch(error => console.error('Error:', error));
  }
</script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

@endsection