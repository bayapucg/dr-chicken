<?php include("header.php"); ?>

<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
     
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <h3 class="section-title">shop by</h3>
              <div class="widget-header">
                <h4 class="widget-title">Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed"> Chicken </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">Chicken 1</a></li>
                          <li><a href="#">Chicken 2</a></li>
                          <li><a href="#">Chicken 3</a></li>
                          <li><a href="#">Chicken 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed"> Lamp & Goat </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">Lamp 1</a></li>
                          <li><a href="#">Lamp 2</a></li>
                          <li><a href="#">Lamp 3</a></li>
                          <li><a href="#">Lamp 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed"> Fish </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">Fish 1</a></li>
                          <li><a href="#">Fish 2</a></li>
                          <li><a href="#">Fish 3</a></li>
                          <li><a href="#">Fish 4</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed"> Eggs </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">Country eggs</a></li>
                          <li><a href="#">layers eggs</a></li>
                         
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                 
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
			  <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Price Slider</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">₹200.00</span> <span class="pull-right">₹800.00</span> </span>
                  <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                  <input type="text" class="price-slider" value="" >
                </div>
                 </div>
            
            </div>
           
          
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
      
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                        
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/2.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/4.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/3.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                        
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                        
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                        
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="#"><img  src="assets/images/new-arrivals/1.png" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                         
                              <div class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                          <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                           
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane "  id="list-container">
              <div class="category-product">
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                    
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/2.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.pngs" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                    
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                    
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                    
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner -->
                
                <div class="category-product-inner wow fadeInUp">
                  <div class="products">
                    <div class="product-list product">
                      <div class="row product-list-row">
                        <div class="col col-sm-4 col-lg-4">
                          <div class="product-image">
                            <div class="image"> <img src="assets/images/new-arrivals/1.png" alt=""> </div>
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-8 col-lg-8">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Punjabi Tandoori Chicken</a></h3>
                           
                            <div class="product-price"> <span class="price"> ₹450.99 </span> <span class="price-before-discount">₹ 800</span> </div><hr class="m-0 py-1"><div class=""> <span class="">Net wt: 500gms </span> <span class="pull-right">Pieces: 4-5 pcs</span> </div>
                            <!-- /.product-price -->
                            <div class="description m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist"> <a class="add-to-cart" href="#" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                               
                                </ul>
                              </div>
                              <!-- /.action --> 
                            </div>
                            <!-- /.cart --> 
                            
                          </div>
                          <!-- /.product-info --> 
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-list-row -->
                      
                    </div>
                    <!-- /.product-list --> 
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.category-product-inner --> 
                
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
   
  
</div>
<!-- /.body-content --> 
<?php include("footer.php"); ?>