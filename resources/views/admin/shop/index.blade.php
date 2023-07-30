<!DOCTYPE html>
<html>
  <head>
    <title> Admin Store</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ url('admin/global.css')}}" />
    <link rel="stylesheet" href="{{ url('admin/store.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="store">
      <div class="store-inner">
        <div class="frame-parent">
          <input class="frame-child" type="text" />

          <div class="vuesaxlinearnotification-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="{{ url('admin/public/vuesaxlinearnotification.svg')}}"
            />

            <button class="ellipse-parent">
              <img class="frame-item" alt="" src="{{ url('admin/public/ellipse-4@2x.png')}}" />

              <div class="prestigious-restaurant">Prestigious Restaurant</div>
            </button>
          </div>
        </div>
      </div>
      <div class="store-child"></div>
      <div class="n-parent">
        <img class="n-icon" alt="" src="{{ url('admin/public/n.svg')}}" />

        <div class="netmenu">NETMENU</div>
      </div>
      <div class="add-new-items">Add New Items</div>
      <div class="offers">Offers</div>
      <img class="store-item" alt="" src="{{ url('admin/public/line-5.svg')}}" />

      <img class="line-icon" alt="" src="{{ url('admin/public/line-4.svg')}}" />

      <div class="categories-parent">
        <div class="categories">Categories</div>
        <button class="plus-parent" autofocus>
          <img class="plus-icon" alt="" src="{{ url('admin/public/plus.svg')}}" />

          <div class="add-category" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Category</div>
        </button>
      </div>
  
  <ul>
    @foreach ($categories as $category)
    <li>
      <div class="local-menu">
        
        <div class="local-menu1">{{$category->name}}</div>
        <div class="items"></div>
        <img class="menu-icon" alt="" src="{{ url('admin/public/menu.svg')}}" />
       
      </div> </li>
       @endforeach
      </ul>
     
       
      <div class="drinks">
        <div class="proteins">Proteins</div>
        <div class="items">5 items</div>
      </div>
      <div class="sides">
        <div class="proteins">Drinks</div>
        <div class="items">9 items</div>
      </div>
      
      <div class="frame-group">
        <div class="available-items-parent">
          <div class="categories">Available Items</div>
          <div class="change-view">Change View</div>
        </div>
        <div class="frame-container">
          <div class="frame-div">
            <div class="rectangle-parent">
              <img
                class="frame-inner"
                alt=""
                src="{{ url('admin/public/rectangle-25@2x.png')}}"
              />

              <div class="jollof-rice-fried-rice-chic-parent">
                <div class="jollof-rice-fried">
                  Jollof Rice, Fried rice & Chicken
                </div>
                <div class="local-menu2">Local Menu</div>
                <div class="n1400">N1400</div>
              </div>
            </div>
            <div class="div">
              <span class="span">125</span>
              <span class="span1">/321</span>
            </div>
          </div>
          <div class="frame-div">
            <div class="rectangle-parent">
              <img
                class="frame-inner"
                alt=""
                src="{{ url('admin/public/rectangle-251@2x.png')}}"
              />

              <div class="jollof-rice-fried-rice-chic-parent">
                <div class="jollof-rice-fried">
                  Jollof Rice, Fried rice & Chicken
                </div>
                <div class="local-menu2">Sides</div>
                <div class="n1400">N1400</div>
              </div>
            </div>
            <div class="div">
              <span class="span">125</span>
              <span class="span1">/321</span>
            </div>
          </div>
          <div class="frame-div">
            <div class="rectangle-parent">
              <img
                class="frame-inner"
                alt=""
                src="{{ url('admin/public/rectangle-252@2x.png')}}"
              />

              <div class="jollof-rice-fried-rice-chic-parent">
                <div class="jollof-rice-fried">
                  Jollof Rice, Fried rice & Chicken
                </div>
                <div class="local-menu2">Drinks</div>
                <div class="n1400">N1400</div>
              </div>
            </div>
            <div class="div">
              <span class="span">125</span>
              <span class="span1">/321</span>
            </div>
          </div>
          <div class="frame-div">
            <div class="rectangle-parent">
              <img
                class="frame-inner"
                alt=""
                src="{{ url ('admin/public/rectangle-253@2x.png')}}"
              />

              <div class="jollof-rice-fried-rice-chic-parent">
                <div class="jollof-rice-fried">
                  Jollof Rice, Fried rice & Chicken
                </div>
                <div class="local-menu2">Drinks</div>
                <div class="n1400">N1400</div>
              </div>
            </div>
            <div class="div">
              <span class="span">125</span>
              <span class="span1">/321</span>
            </div>
          </div>
          <div class="frame-div">
            <div class="rectangle-parent">
              <img
                class="frame-inner"
                alt=""
                src="{{ url ('admin/public/rectangle-254@2x.png')}}"
              />

              <div class="jollof-rice-fried-rice-chic-parent">
                <div class="jollof-rice-fried">
                  Jollof Rice, Fried rice & Chicken
                </div>
                <div class="local-menu2">Sides</div>
                <div class="n1400">N1400</div>
              </div>
            </div>
            <div class="div">
              <span class="span">125</span>
              <span class="span1">/321</span>
            </div>
          </div>
          <div class="frame-parent5">
            <div class="rectangle-parent">
              <img
                class="frame-inner"
                alt=""
                src="{{ url('admin/public/rectangle-255@2x.png')}}"
              />

              <div class="jollof-rice-fried-rice-chic-parent">
                <div class="jollof-rice-fried">Chicken</div>
                <div class="local-menu2">Local Menu</div>
                <div class="n1400">N1400</div>
              </div>
            </div>
            <div class="div5">55</div>
          </div>
        </div>
      </div>

      <!-- Add New Item Tab -->
      <div class="add-new-item-tab">
         <!-- Add Item Form -->
<form action="{{ route('admin.shop.addItem') }}" method="POST" enctype="multipart/form-data">
    @csrf
    

    
        <img class="add-new-item-tab-child" alt="" src="{{ url('admin/public/line-4.svg')}}" />
<label for="product_name">Product Name:</label>
        <div class="frame-parent6">
          <input class="frame-input" type="text" name="product_name" id="product_name" />

          <img
            class="frame-child5"
            alt=""
            loading="eager"
            src="{{ url('admin/public/Item picture@2x.png')}}"
          />

          {{-- <div class="rectangle-div"></div>
          <div class="rectangle-div"></div>
          <div class="rectangle-div"></div> --}}
          <input class="frame-child8" type="text" name="decription" />
        </div>
        <img class="add-new-item-tab-child" alt="" src="{{ url('admin/public/line-4.svg')}}" />
      </div>


     

      <i class="attach-image"><label for="product_image">Product Image:</label>
    <input type="file" name="product_image" id="product_image"></i>
      <i class="price"><label for="product_price">Product Price:</label>
    <input type="number" name="product_price" id="product_price"></i>
     
      <i class="category">Category:
    <select name="category_id" class="categor" id="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select></i>
    
      <div class="new-item-is-going-to-be-added-parent">
        <div class="new-item-is">0 new item is going to be added</div>
        <button class="add-items-wrapper">
          <div class="add-items">Add items</div>
        </button>
      </div>
    </form>
      <button class="plus-group" data-bs-toggle="modal" data-bs-target="#createOffer">
        <img class="plus-icon1" alt="" src="{{ url('admin/public/plus1.svg')}}" />

        <i class="create-new-offers">Create new offers</i>
      </button>
      <div class="rectangle-parent4">
        <div class="frame-child9"></div>
        <div class="jollof-rice-fried5">Jollof Rice, Fried rice & Chicken</div>
        <div class="off">20% Off</div>
      </div>
      <div class="rectangle-parent5">
        <div class="frame-child10"></div>
        <div class="jollof-rice-fried5">Jollof Rice, Fried rice & Chicken</div>
        <div class="off">20% Off</div>
      </div>
      <div class="rectangle-parent6">
        <div class="frame-child11"></div>
        <div class="jollof-rice-fried5">Jollof Rice, Fried rice & Chicken</div>
        <div class="off">20% Off</div>
      </div>
      <div class="rectangle-parent7">
        <div class="frame-child12"></div>
        <div class="jollof-rice-fried5">Jollof Rice, Fried rice & Chicken</div>
        <div class="off">20% Off</div>
      </div>
      <div class="line-div"></div>
      <div class="store-child1"></div>
      <div class="plus-container">
        <img class="plus-icon1" alt="" src="{{ url('admin/public/plus2.svg')}}" />

        <i class="new-item-is">Add new tab</i>
      </div>
      <img class="store-child2" alt="" src="{{ url('admin/public/line-11.svg')}}" />

      <div class="side-bar">
        <div class="n-group">
          <img class="n-icon" alt="" src="{{ url('admin/public/n.svg')}}" />

          <div class="netmenu">NETMENU</div>
        </div>
        <div class="frame-parent7">
          <button class="vuesaxlinear24-support-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="{{ url('admin/public/vuesaxlinear24support.svg')}}"
            />

            <div class="support">Support</div>
          </button>
           <a class="btn" href= "{{ route('admin/logout')}}">
          <button class="vuesaxlinear24-support-parent" >
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="{{ url('admin/public/vuesaxlinearlogout.svg')}}"
            />

            <div class="support">Logout</div>
          </button>
          </a>
        </div>
        <div class="side-bar-inner">
          <a class="side-bar-inne btn text-dark" href="{{ url('admin/dashboard')}}">
          <button class="vuesaxlinear24-support-parent" id="frameButton6" href="{{ url('admin/dashboard')}}">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="{{url('admin/public/vuesaxlinearelement2.svg')}}"
            />

            <div class="dashboard">Dashboard</div>
          </button>
          </a>
        </div>
        <a class="btn" href="{{ url('admin/shop/index')}}">
        <button class="side-bar-child">
          <div class="vuesaxlinearframe-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="{{ url('admin/public/vuesaxlinearshoppingcart.svg')}}"
            />
           
            <div class="support">Store</div>
          </div>
        </button>
      </a>
      
        <button class="frame-button">
          <div class="vuesaxlinearframe-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="{{url('admin/public/vuesaxlinearframe.svg')}}"
            />

            <div class="support">Insight</div>
          </div>
        </button>
        <a class="btn" href="{{url('admin/update-admin-details')}}"> 
        <button class="side-bar-inner1">
          <div class="vuesaxlinearsetting-2-parent" id="frameContainer37">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="{{url('admin/public/vuesaxlinearsetting2.svg')}}"
            />

            <div class="support">Settings</div>
          </div>
        </button>
        </a>
      </div>
    </div>



{{-- modal for adding categories --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin.shop.addCategory') }}" method="POST">
           @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" name='name'>Name of Category</label>
            <input type="text" class="form-control" name="name" id="category_name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label" name='description'>Description of Category</label>
            <textarea class="form-control" id="description" name='description'></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Add Category</button>
      </div>
    </form>
    </div>
  </div>
</div>


{{-- modal for adding new offers --}}

<!-- Button to trigger modal -->
<button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#createOffer">
    Create New Offer
</button>

<!-- Create Offer Modal -->
<div class="modal fade" id="createOffer" tabindex="-1" aria-labelledby="createOfferLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createOfferModalLabel">Create New Offer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>
            <div class="modal-body">
                <!-- Create Offer Form -->
                <form action="{{ route('admin.shop.addItem') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="offer_name">Offer Name:</label>
                        <input type="text" class="form-control" name="offer_name" id="offer_name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="discount_percentage">Discount Percentage:</label>
                        <input type="number" class="form-control" name="discount_percentage" id="discount_percentage" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="expiry_date">Expiry Date:</label>
                        <input type="date" class="form-control" name="expiry_date" id="expiry_date">
                    </div>
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-danger">Create Offer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<ul>
  @foreach($items as $item)
  <li>
    {{ $item->product_name}}
  </li>
  @endforeach
</ul>


    <script>
      var frameButton6 = document.getElementById("frameButton6");
      if (frameButton6) {
        frameButton6.addEventListener("click", function (e) {
          // Please sync "Dashboard" to the project
        });
      }
      
      var frameContainer37 = document.getElementById("frameContainer37");
      if (frameContainer37) {
        frameContainer37.addEventListener("click", function (e) {
          // Please sync "Desktop - 8" to the project
        });
      }
      </script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="{{ url('admin/custom.js')}}"></script>
  </body>
</html>
