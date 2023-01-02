@extends('layout.admin.app')
@section('content')



<div class="container-fluid page__heading-container">
    <div class="page__heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item">UI Components</li>
                <li class="breadcrumb-item active"
                    aria-current="page">Edit Products</li>
            </ol>
        </nav>

        <h1 class="m-0">Edit Products</h1>
    </div>
</div>

<div class="container-fluid page__container">



    <div class="card card-form">
        <div class="row no-gutters" style="padding: 2%">
         {{-- ========================edit Products=============================== --}}

         <form method="post" action="{{ route('product.update',$product->product_id) }}" enctype="multipart/form-data"
            id="Uproduct_form">
         @csrf
         @if( ! env("APP_AJAX") )
            @method("PUT")
         @endif
         <div class="col-xs-12">
            <div class="form-group col-xs-3">
               <label class="control-label no-padding-right" for="product_name"> Product Name </label>
               <input placeholder="Product Name" name="product_name"
                      value="{{ old('product_name',$product->product_name) }}" id="product_name" class="form-control"
                      type="text">
            </div>
            <div class="form-group col-xs-3">
               <label class="control-label no-padding-right" for="made_in"> Made IN: </label>
               <input placeholder="Made IN" name="made_in" value="{{ old('made_in',$product->made_in) }}" id="made_in"
                      class="form-control" type="text">
            </div>
            <div class="form-group col-xs-3">
               <label for="brand_id">Choose your brands</label>
               <select name="brand_id" id="brand_id" class="form-control">
                  @foreach($brands as $brand)
                     <option {{ $product->brand_id == $brand->brand_id ? "selected" : '' }} value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group  col-xs-3">
               <label class=" control-label no-padding-right" for="product_slug"> Product Slug </label>
               <input placeholder="Product Slug" id="product_slug" name="product_slug"
                      value="{{ old('product_slug',$product->product_slug) }}" class="form-control" type="text">
            </div>
         </div>

         <div class="form-group col-xs-12">
            <div class="col-xs-3">
               <label class=" control-label no-padding-right" for="sale_price"> Sale Price </label>
               <input placeholder="Sale Price" name="sale_price" value="{{ old('sale_price',$product->sale_price) }}"
                      id="sale_price" class="form-control" min="0" type="number">
            </div>
            <div class="col-xs-3">
               <label class=" control-label no-padding-right" for="buy_price"> Buy Price </label>
               <input placeholder="Buy Price" name="buy_price" value="{{ old('buy_price',$product->buy_price) }}"
                      id="buy_price" class="form-control" min="0" type="number">
            </div>
            <div class="col-xs-3">
               <label for="quantity">Quantity</label>
               <input placeholder="Quantity" type="number" value="{{ old("quantity",$product->quantity) }}" min="0"
                      name="quantity" class="form-control" id="quantity">
            </div>
            <div class="col-xs-3">
               <label for="weight">Weight</label>
               <input placeholder="weight" type="number" value="{{ old("weight",$product->weight) }}" min="0"
                      name="weight" class="form-control" id="weight">
            </div>
         </div>
         <div class="col-xs-12 form-group">
            <label for="description">Description</label>
            <textarea id="description" rows="6" class="form-control"
                      name="description">{{ old('description',$product->description) }}</textarea>
         </div>
         <div class="form-group col-xs-6">
            <div class="col-sm-4">

               <label><h4>Available ? </h4>
                  <input type="checkbox" name="status" id="status" onclick=''
                         class="ace ace-switch ace-switch-5" {{ $product->status == 1 ? 'checked': '' }} >
                  <span class="lbl"></span>
               </label>

               <label><h4>Discount ?</h4>
                  <input type="checkbox" name="is_off" id="is_off" onclick=""
                         class="ace ace-switch ace-switch-5" {{ $product->is_off == 1 ? 'checked' :'' }}>
                  <span class="lbl"></span>
               </label>
            </div>
            <div class="col-sm-8">
               <div class="available0">
                  <label for="data_available"><b>Available Date</b></label>
                  <input id="data_available" name="data_available" class="form-control"
                         value="{{ old('data_available',$product->data_available) }}" type="date"/>
               </div>
               <div class="div-discount">
                  <label for="off_price"><b>Amount of Discount:</b></label>
                  <input id="off_price" name="off_price" class="form-control" min="0"
                         value="{{ old('off_price',$product->off_price) }}" type="number">
               </div>
            </div>
         </div>
         <div class="form-group col-xs-6">
            <div class="form-group">
               <label class="col-sm-3 control-label no-padding-right" for="form-field-tags">Tag input</label>
               <div class="col-sm-9">
                  <div class="inline">
                     <input type="text" name="tags" id="form-field-tags" placeholder="Enter tags ..."
                            value="<?php foreach ($product->tags as $tag) {
                                echo $tag->tag_name . ',';
                            } ?>"/>
                     <span class="help-button" title="Type your tag and press enter">?</span>
                  </div>
                  <label>
                     <h4>Has Size ? </h4>
                     <input type="checkbox" name="has_size" id="has_size" class="ace ace-switch ace-switch-5"
                             {{ $product->has_size == 1 ? 'checked' :'' }}>
                     <span class="lbl"></span>
                  </label>
               </div>
            </div>

         </div>
         <div class="form-group col-xs-12">
            <div class="col-xs-6">
               <!-- file input -->
               <label for="photos">Photos</label>
               <label class="ace-file-input">
                  <input type="file" name="photos[]" id="gallery-photo-add" multiple>
                  <span class="ace-file-container" data-title="Choose"><span class="ace-file-name"
                                                                             data-title="No Photos ..."><i
                                class=" ace-icon fa fa-upload"></i></span></span>
               </label>
            </div>
            <div class="col-xs-6">
               <!-- to show selected images -->
               <div class="gallery"></div>
               @foreach($product->photos as $photo)
                  <div class="fileuploader-items div-show image-show">
                     <ul class="fileuploader-items-list">
                        <li class="fileuploader-item file-has-popup file-type-image file-ext-png">
                           <div class="columns">
                              <a href="{{ $photo->src }}" target="_blank">
                                 <div class="column-thumbnail">
                                    <div class="fileuploader-item-image fileuploader-no-thumbnail">
                                       <div style="background-color: #1B6AAA " class="fileuploader-item-icon">
                                          <img src="{{ $photo->thumbnail }}" alt="{{ $photo->photo_title }}">
                                       </div>
                                    </div>
                                    <span class="fileuploader-action-popup">
                                 </span>
                                 </div>
                              </a>
                              <div class="column-title">
                                 <div title="innostudio.de__setting-icnload.png">{{ $photo->photo_title }}</div>
                                 <span>{{ $photo->photo_size }} KB </span>
                              </div>
                              <div class="column-actions">
                                 <input type="radio" name="cover" value="{{ $photo->addr }}"
                                        {{ $photo->addr == substr(strchr($product->cover,'\\'),1) ? 'checked' : '' }}  class="cover_cb fileuploader-action radio"
                                        id="cover" title="Cover Photo">
                                 <i class="icon ui-icon-asc"></i><a
                                         class="fileuploader-action fileuploader-action-remove" title="remove"><i
                                            data-id="{{ $photo->photo_id }}" class="destroy_image"></i></a></div>
                           </div>
                           <div class="progress-bar2">
                              <div class="fileuploader-progressbar">
                                 <div class="bar"></div>
                              </div>
                              <span></span>
                           </div>
                        </li>
                     </ul>
                  </div>
               @endforeach
            </div>
         </div>

         <div class="col-xs-12">
            <div class="col-xs-6">
               <div class="widget-box">
                  <div class="widget-header">
                     <h4 class="widget-title">Categories</h4>
                     <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                           <i class="ace-icon fa fa-chevron-up"></i>
                        </a>
                     </div>
                  </div>
                  <div class="widget-body">
                     <div class="widget-main">
                        <select multiple="multiple" size="10" name="categories[]" id="duallist0">
                           @foreach($categories as $category)
                              <option {{ in_array($category->category_id,$p_categories) ? 'selected': '' }} value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                           @endforeach
                        </select>
                        <div class="hr hr-16 hr-dotted"></div>
                     </div>
                     <label></label>
                  </div>
               </div>
            </div>
            <div class="col-xs-6">
               <div class="widget-box">
                  <div class="widget-header">
                     <h4 class="widget-title">Colors of product</h4>
                     <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                           <i class="ace-icon fa fa-chevron-up"></i>
                        </a>
                     </div>
                  </div>
                  <div class="widget-body">
                     <div class="widget-main">
                        <div class="form-group">
                           <select multiple="multiple" size="10" name="colors[]" id="duallist">
                              @foreach($colors as $color)
                                 <option {{  in_array($color->color_id,$p_colors) ? 'selected' : '' }} value="{{ $color->color_id}}">{{ $color->color_name }}</option>
                              @endforeach
                           </select>
                           <div class="hr hr-16 hr-dotted"></div>
                        </div>
                     </div>
                     <label></label>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12">
            <div class="col-xs-6">
               <input type="submit" class="btn btn-success btn-block" id="submit" value="SAVE">
            </div>
            <div class="col-xs-6">
               <a class="btn btn-danger btn-block" onclick="history.back()">Cancel</a>
            </div>
         </div>
      </form>
         {{-- ======================== End edit Products=============================== --}}
        
        </div>
    </div>



    <!-- <div class="card card-form">
<div class="row no-gutters">
<div class="col-lg-4 card-body">
<p><strong class="headings-color">Basic Information</strong></p>
<p class="text-muted">Edit your account details and settings.</p>
</div>
<div class="col-lg-8 card-form__body card-body">

</div>
</div>
</div> -->
</div>

</div>


@endsection   