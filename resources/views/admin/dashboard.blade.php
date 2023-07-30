@extends('admin.layout.layout')
@section('def')

    <div class="overview">Overview </div>
    <header class="dashboard-inner">
    <div class="total-orders-parent">
      <div class="total-orders">Total Orders</div>
    <div class="div">12,300</div>
  </div>
</header>
<div class="order-description">Order description</div>
<div class="price">Price</div>
<div class="name">Name</div>
<div class="status">Status</div>
<div class="time">Time</div>
<div class="action">Action</div>
<header class="frame-header">
  <div class="total-orders-parent">
    <div class="total-orders">Completed Orders</div>
    <div class="div">7,345</div>
  </div>
</header>
<header class="dashboard-inner1">
  <div class="total-orders-parent">
    <div class="total-orders">Pending Orders</div>
    <div class="div">10</div>
  </div>
</header>
<div class="frame-div">
  <div class="total-orders-parent">
    <div class="total-orders">Total Sales</div>
    <div class="div">N150, 100</div>
  </div>
</div>
<div class="dashboard-item"></div>
<div class="line-div"></div>
<div class="order-8">
  <div class="order-8-child"></div>
  <div class="div3">#8</div>
  <div class="a-plate-of">
    A plate of Jollof Rice, Fried rice & Chicken with extra plantain.
  </div>
  <div class="n3500">N3,500</div>
  <div class="olusola-bakare-parent">
    <div class="total-orders">Olusola Bakare</div>
    <div class="div4">07062079109</div>
  </div>
  <div class="pending">Pending</div>
  <div class="pm-parent">
    <div class="total-orders">02:00pm</div>
    <div class="div4">July, 21</div>
  </div>
  <div class="frame-parent">
    <div class="cancel-wrapper">
      <button class="cancel" autofocus>Cancel</button>
    </div>
    <button class="approve-wrapper" autofocus>
      <div class="approve">Approve</div>
    </button>
  </div>
</div>
<form class="order-6" method="get">
  <div class="order-8-child"></div>
  <div class="pizza-with-sausage">25 Pizza with sausage roll</div>
  <div class="n50000">N50,000</div>
  <div class="maria-catherine-parent">
    <div class="maria-catherine">Maria Catherine</div>
    <div class="div5">07062079109</div>
  </div>
  <div class="completed">Completed</div>
  <div class="pm-group">
    <div class="maria-catherine">12:03pm</div>
    <div class="div5">July, 21</div>
  </div>
  <div class="frame-group">
    <button class="cancel-container">
      <div class="maria-catherine">Cancel</div>
    </button>
    <button class="approved-parent" autofocus>
      <div class="maria-catherine">Approved</div>
      <img class="approve-icon" alt="" src="./public/approve.svg" />
    </button>
  </div>
  <div class="div6">#6</div>
</form>
<form class="order-1" method="get">
  <div class="order-8-child"></div>
  <div class="pizza-with-sausage">25 Pizza with sausage roll</div>
  <div class="n50000">N50,000</div>
  <div class="maria-catherine-parent">
    <div class="maria-catherine">Maria Catherine</div>
    <div class="div5">07062079109</div>
  </div>
  <div class="completed">Completed</div>
  <div class="pm-group">
    <div class="maria-catherine">12:03pm</div>
    <div class="div5">July, 21</div>
  </div>
  <div class="frame-group">
    <button class="cancel-container" autofocus>
      <div class="maria-catherine">Cancel</div>
    </button>
    <button class="approved-parent" autofocus>
      <div class="maria-catherine">Approved</div>
      <img class="approve-icon" alt="" src="./public/approve.svg" />
    </button>
  </div>
  <div class="div8">#1</div>
</form>
<div class="showing">Showing:</div>
<div class="out-of-158">Out of 158 items</div>
<div class="parent">
  <div class="total-orders">8</div>
  <div class="frame-child"></div>
</div>
<div class="order-5">
  <div class="order-8-child"></div>
  <div class="plate-of-jollof">
    2 plate of Jollof Rice, Fried rice & Chicken with extra plantain.
  </div>
  <div class="n7000">N7,000</div>
  <div class="maria-catherine-parent">
    <div class="total-orders">Demilade Johnson</div>
    <div class="div4">07062079109</div>
  </div>
  <div class="pending1">Pending</div>
  <div class="pm-group">
    <div class="total-orders">10:01am</div>
    <div class="div4">July, 21</div>
  </div>
  <div class="frame-parent1">
    <button class="frame-button">
      <div class="maria-catherine">Cancel</div>
    </button>
    <button class="approve-wrapper" autofocus>
      <div class="approve">Approve</div>
    </button>
  </div>
  <div class="div11">#5</div>
</div>
<div class="order-4">
  <div class="order-8-child"></div>
  <div class="plate-of-jollof">
    2 raps of Semo and Egusi Soup, 3 pieces Cow meat.
  </div>
  <div class="n7000">N6,500</div>
  <div class="maria-catherine-parent">
    <div class="total-orders">Samson Adeniyi</div>
    <div class="div4">07062079109</div>
  </div>
  <div class="cancelled">Cancelled</div>
  <div class="pm-group">
    <div class="total-orders">9:24pm</div>
    <div class="div4">July, 20</div>
  </div>
  <div class="frame-parent1">
    <button class="cancelled-wrapper" autofocus>
      <div class="maria-catherine">Cancelled</div>
    </button>
    <div class="approve-frame">
      <div class="total-orders">Approve</div>
    </div>
  </div>
  <div class="div3">#4</div>
</div>
<div class="order-7">
  <div class="order-8-child"></div>
  <div class="plate-of-jollof">
    1 rap of Amala and Okro soup with goat meat, beef, & chicken.
  </div>
  <div class="n7000">N5,000</div>
  <div class="maria-catherine-parent">
    <div class="total-orders">Ayodeji Micheal O.</div>
    <div class="div4">07062079109</div>
  </div>
  <div class="completed2">Completed</div>
  <div class="pm-group">
    <div class="total-orders">01:25pm</div>
    <div class="div4">July, 21</div>
  </div>
  <div class="frame-parent1">
    <button class="cancelled-wrapper" autofocus>
      <div class="maria-catherine">Cancel</div>
    </button>
    <button class="approved-container" autofocus>
      <div class="maria-catherine">Approved</div>
      <img class="approve-icon" alt="" src="./public/approve1.svg" />
    </button>
  </div>
  <div class="div15">#7</div>
</div>
<div class="order-2">
  <div class="order-8-child"></div>
  <div class="plate-of-jollof">
    1 rap of Amala and Okro soup with goat meat, beef, & chicken.
  </div>
  <div class="n7000">N5,000</div>
  <div class="maria-catherine-parent">
    <div class="total-orders">Ayodeji Micheal O.</div>
    <div class="div4">07062079109</div>
  </div>
  <div class="completed2">Completed</div>
  <div class="pm-group">
    <div class="total-orders">01:25pm</div>
    <div class="div4">July, 21</div>
  </div>
  <div class="frame-parent1">
    <button class="cancelled-wrapper">
      <div class="maria-catherine">Cancel</div>
    </button>
    <button class="approved-container">
      <div class="maria-catherine">Approved</div>
      <img class="approve-icon" alt="" src="./public/approve1.svg" />
    </button>
  </div>
  <div class="div17">#2</div>
</div>
<div class="order-3">
  <div class="order-8-child"></div>
  <div class="div18">#3</div>
  <div class="plate-of-jollof">
    1 rap of Semo and Egusi Soup with goat meat.
  </div>
  <div class="n7000">N4,500</div>
  <div class="maria-catherine-parent">
    <div class="total-orders">Niyi Borire</div>
    <div class="div4">07062079109</div>
  </div>
  <div class="cancelled">Cancelled</div>
  <div class="pm-group">
    <div class="total-orders">9:55pm</div>
    <div class="div4">July, 20</div>
  </div>
  <div class="frame-parent1">
    <button class="cancelled-wrapper">
      <div class="maria-catherine">Cancelled</div>
    </button>
    <button class="cancelled-wrapper">
      <div class="maria-catherine">Approve</div>
    </button>
  </div>
</div>
<!-- @include('admin.layout.header')
    @include('admin.layout.sidebar') -->
<div class="frame-parent8">
  <div class="all-orders-parent">
    <div class="all-orders">All Orders</div>
    <img class="vuesaxlineararrow-down-icon" alt="" src="./public/vuesaxlineararrowdown.svg" />
  </div>
  <div class="this-month-parent">
    <div class="this-month">This month</div>
    <img class="vuesaxlineararrow-down-icon" alt="" src="./public/vuesaxlineararrowdown1.svg" />
  </div>
</div>
<div class="no-parent">
  <div class="prestigious-restaurant">No</div>
  <img class="vuesaxlinearframe-icon1" alt="" src="./public/vuesaxlinearframe1.svg" />
</div>
@endsection