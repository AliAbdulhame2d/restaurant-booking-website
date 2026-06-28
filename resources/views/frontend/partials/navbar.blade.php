<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold text-red-600">Desi Junction</a>
        <div class="hidden md:flex space-x-8">
            <a href="{{route('home')}}" class="nav-link active">Home</a>
            <a href="#menu" class="nav-link">Menu</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#reservation" class="nav-link">Reservations</a>
            <a href="#contact" class="nav-link">Contact</a>
            <a href="{{route('login')}}" class="nav-link">Login</a>
        </div>
        <button id="mobile-menu-button" class="md:hidden text-gray-700">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white py-2 px-4 shadow-lg">
        <a href="#home" class="block py-2 nav-link active">Home</a>
        <a href="#menu" class="block py-2 nav-link">Menu</a>
        <a href="#about" class="block py-2 nav-link">About</a>
        <a href="#reservation" class="block py-2 nav-link">Reservations</a>
        <a href="#contact" class="block py-2 nav-link">Contact</a>
    </div>
</nav>