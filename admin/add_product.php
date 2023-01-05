<?php
define('BASE_PATH', '../');
require_once('../logic/categories.php');
$categories = getCategories();
require_once('../logic/colors.php');
$colors = getColors();
require_once('../logic/sizes.php');
$sizes = getSizes();
?>
<link href="../css/style.css" rel="stylesheet" />
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form class="row" method="post"
            enctype="multipart/form-data">
            <div class="form-group col-6">
              <label>Product name</label>
              <input name="name" class="form-control"/>
            <div class="form-group col-6">
              <label>Product image</label>
              <input name="image" type="file" />
            </div>
            <div class="form-group col-12">
              <label>Description</label>
              <textarea name="description"></textarea>
            </div>
            <div class="form-group col-6">
              <label>Price</label>
              <input name="price" class="form-control">
            </div>
            <div class="form-group col-6">
              <label>Discount </label>
              <input name="discount" type="number" class="form-control">              
            </div>
            <div class="form-group col-6">
              <label>BarCode</label>
              <input name="bar_code" class="form-control">
            </div>
            <div class="form-group col-6">
              <label>Category</label>
              <select name="category_id" class="form-control">
                <?php
                foreach ($categories as $category) {?>
                  <option><?=$category['name'] ?></option>';
                  <?php
                }
                ?>
              </select>
            </div>

            <div class="form-group col-6">
              <label>Color</label>
              <select name="color_id" class="form-control">
              <?php
                foreach ($colors as $color) {?>
                  <option ><?=$color['name'] ?></option>';
                  <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-6">
              <label>Size</label>
              <select name="size_id" class="form-control">
              <?php
                foreach ($sizes as $size) {?>
                  <option><?=$size['name'] ?></option>';
                  <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-6">
              <label>Recent</label>
              <input type="checkbox" name="is_recent"  />
            </div>
            <div class="form-group col-6">
              <label>Featured</label>
              <input type="checkbox" name="is_featured"  />
            </div>
            <button class="btn btn-danger">Add</button>
            
          </form>
        </div>
      </div>
    </div>
  </section>