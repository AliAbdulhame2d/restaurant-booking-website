    <!-- Hero Section -->
    <section id="home" class="hero min-h-screen flex items-center justify-center text-center text-white">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Welcome to Desi Junction</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Experience the finest culinary delights crafted with passion and tradition</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#menu" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">View Menu</a>
                <a href="#reservation" class="bg-transparent border-2 border-white hover:bg-white hover:text-red-600 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">Book a Table</a>
            </div>
        </div>
    </section>

    <!-- Featured Dishes -->

    <!-- Photo Gallery -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Restaurant Interior" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Dining Area" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Bar Area" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1555244162-803834f70033?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Chef Cooking" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Dish Presentation" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Wine Selection" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1398&q=80" alt="Dessert Display" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
                <img src="https://images.unsplash.com/photo-1565895405227-31cffbe0cf86?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Outdoor Seating" class="w-full h-48 object-cover rounded-lg shadow hover:scale-105 transition duration-300">
            </div>
        </div>
    </section>

    <section class="py-16 bg-amber-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Signature Dishes</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Dish 1 -->
                @foreach ($featureMenus as $menu)
                <div class="dish-card bg-white rounded-lg overflow-hidden shadow-lg transition duration-500">
                    <img src="{{asset('storage/'.$menu->image)}}" alt="Signature Dish" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">{{$menu->name}}</h3>
                        <p class="text-gray-600 mb-4">{{$menu->description}}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-red-600 font-bold text-lg">{{$menu->price.' $'}}</span>
                            <a href="#reservation" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded transition duration-300">Reserve Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            
                
             
               
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Menu</h2>
            
            <!-- Menu Tabs -->
            <div class="flex flex-wrap justify-center gap-2 mb-12">
            
                @foreach ($categories as $category)
                    <button class="menu-tab active px-6 py-2 rounded-full" data-category="{{$category->id}}">{{$category->name}}</button>
                @endforeach
            </div>
         
            <!-- Menu Content -->
            <div class="menu-content">
                <!-- Appetizers --> 
                
            @foreach ($menus as $menu)
                <div id="{{$menu->category_id}}" class="menu-category" style="max-height: 600px; overflow-y: auto;">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                   
                       
                            <!-- Item 1 -->
                            
                            <div class="flex gap-4">
                                <img src="{{asset('storage/'.$menu->image)}}" class="w-24 h-24 object-cover rounded-lg" >
                                 <div>
                                    <h3 class="font-bold text-lg">{{$menu->name}}</h3>
                                    <p class="text-gray-600 text-sm">{{$menu->description}}</p>
                                    <span class="text-red-600 font-bold">{{$menu->price.' $'}}</span>
                                </div>
                            </div>
                      
                 
                    </div>
                </div>
                @endforeach
  
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">What Our Guests Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-amber-50 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-amber-400 text-2xl mr-2">★★★★★</div>
                    </div>
                    <p class="text-gray-700 mb-4">"The food was absolutely incredible! Every dish we tried was packed with flavor and beautifully presented. The service was impeccable too."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah J." class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-bold">Yeshwant K.</h4>
                            <p class="text-gray-600 text-sm">Regular Customer</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-amber-50 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-amber-400 text-2xl mr-2">★★★★★</div>
                    </div>
                    <p class="text-gray-700 mb-4">"We celebrated our anniversary here with Khusi and it was perfect. The ambiance, the wine pairing suggestions, and especially the chocolate lava cake made it unforgettable."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Michael T." class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-bold">Suraj K.</h4>
                            <p class="text-gray-600 text-sm">First-time Visitor</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-amber-50 p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-amber-400 text-2xl mr-2">★★★★☆</div>
                    </div>
                    <p class="text-gray-700 mb-4">"Consistently excellent food and service. The truffle pasta is my favorite dish in town. Only wish they had more vegetarian options."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya K." class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h4 class="font-bold">Priya Kumari.</h4>
                            <p class="text-gray-600 text-sm">Food Blogger</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
<div class="bg-amber-50 p-6 rounded-lg shadow-lg">
    <div class="flex items-center mb-4">
        <div class="text-amber-400 text-2xl mr-2">★★★★★</div>
    </div>
    <p class="text-gray-700 mb-4">"This place has the best butter chicken I’ve ever had. The flavors were rich and the naan was perfectly soft. Highly recommend!"</p>
    <div class="flex items-center">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rohit M." class="w-10 h-10 rounded-full mr-3">
        <div>
            <h4 class="font-bold">Rohit M.</h4>
            <p class="text-gray-600 text-sm">Repeat Customer</p>
        </div>
    </div>
</div>
<!-- Testimonial 5 -->
<div class="bg-amber-50 p-6 rounded-lg shadow-lg">
    <div class="flex items-center mb-4">
        <div class="text-amber-400 text-2xl mr-2">★★★★★</div>
    </div>
    <p class="text-gray-700 mb-4">"Visited for lunch with colleagues. Clean space, fantastic vegetarian thali, and great filter coffee to end the meal."</p>
    <div class="flex items-center">
        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Meena R." class="w-10 h-10 rounded-full mr-3">
        <div>
            <h4 class="font-bold">Meena R.</h4>
            <p class="text-gray-600 text-sm">Local Guide</p>
        </div>
    </div>
</div>
<!-- Testimonial 6 -->
<div class="bg-amber-50 p-6 rounded-lg shadow-lg">
    <div class="flex items-center mb-4">
        <div class="text-amber-400 text-2xl mr-2">★★★★★</div>
    </div>
    <p class="text-gray-700 mb-4">"Absolutely loved the spicy paneer tikka! Service was quick and the staff was incredibly friendly. Definitely coming back next weekend."</p>
    <div class="flex items-center">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Priya D." class="w-10 h-10 rounded-full mr-3">
        <div>
            <h4 class="font-bold">Priya D.</h4>
            <p class="text-gray-600 text-sm">Food Blogger</p>
        </div>
    </div>
</div>



            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-amber-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Restaurant Interior" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Story</h2>
                    <p class="text-gray-700 mb-4">Founded in 2005, Desi Junction began as a small family-owned bistro with a passion for authentic cuisine. What started as a humble 10-table restaurant has grown into an award-winning dining destination, thanks to our loyal customers and dedicated team.</p>
                    <p class="text-gray-700 mb-6">We believe in using only the freshest, locally-sourced ingredients to create dishes that tell a story. Every recipe on our menu has been carefully crafted and perfected over the years, blending traditional techniques with modern creativity.</p>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Our Mission</h3>
                    <p class="text-gray-700">To provide an unforgettable dining experience where every guest feels at home, every dish tells a story, and every meal is a celebration of flavor and community.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section id="reservation" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Make a Reservation</h2>
            
            <div class="max-w-2xl mx-auto bg-amber-50 p-8 rounded-lg shadow-lg">  
                <x-alert/> 
                <form class="reservation-form1 space-y-6" method="POST" action="{{route('reservations.store')}}">
                   @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-gray-700 mb-2">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 bg-transparent" required>
                            @error('first_name')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="last_name" class="block text-gray-700 mb-2">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="w-full px-4 py-2 bg-transparent" required>
                            @error('last_name')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 bg-transparent" required>
                            @error('email')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 bg-transparent" required>
                            @error('phone')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="guest_count" class="block text-gray-700 mb-2">Number of Guests</label>
                            <input type="number" id="guest_count" name="guest_count" class="w-full px-4 py-2 bg-transparent" required>
                            @error('guest_count')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="reservation_time" class="block text-gray-700 mb-2">Date</label>
                            <input type="datetime-local" id="reservation_time" name="reservation_time" class="w-full px-4 py-2 bg-transparent" required>
                            @error('reservation_time')
                                <p class="text-red-500">{{$message}}</p>
                             @enderror
                        </div>
                      
                        <div>
                            <label for="table_id" class="block text-gray-700 mb-2">Table Number</label>
                            <select id="table_id" name="table_id" class="w-full px-4 py-2 bg-transparent" required>
                                @foreach ($tables as $table)
                                  <option value="{{$table->id}}">{{$table->table_number}}</option>   
                                @endforeach
                               
                            </select>
                                @error('table_id')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                        </div>

                    </div>
                 
                    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-semibold transition duration-300">Reserve Now</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Contact Us</h2>
            <div class="flex flex-col md:flex-row gap-12">
                <div class="md:w-1/2">
                    <div class="bg-white p-8 rounded-lg shadow-lg h-full">
                        <h3 class="text-xl font-bold mb-6 text-gray-800">Get in Touch</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <i class="fas fa-map-marker-alt text-red-600 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold">Address</h4>
                                    <p class="text-gray-600">Karl-Marx-Str 151, 12529 Schönefeld</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i class="fas fa-phone-alt text-red-600 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold">Phone</h4>
                                    <p class="text-gray-600">+49/17630521739</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i class="fas fa-envelope text-red-600 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold">Email</h4>
                                    <p class="text-gray-600">aliabdulhameedeng@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <i class="fas fa-clock text-red-600 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold">Hours</h4>
                                    <p class="text-gray-600">
                                        Monday - Thursday: 11:00 AM - 9:00 PM<br>
                                        Friday - Saturday: 11:00 AM - 10:00 PM<br>
                                        Sunday: 10:00 AM - 8:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="h-full rounded-lg overflow-hidden shadow-lg">
                        <iframe src="https://www.google.com/maps?q=123+Indiranagar+Main+Road,+Bengaluru,+KA+560038&output=embed" width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-red-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Join Our Newsletter</h2>
            <p class="max-w-2xl mx-auto mb-8">Subscribe to receive updates on special events, seasonal menus, and exclusive offers.</p>
            <form class="max-w-md mx-auto flex">
                <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-l focus:outline-none text-gray-900">
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 px-6 py-3 rounded-r font-semibold transition duration-300">Subscribe</button>
            </form>
        </div>
    </section>


    
