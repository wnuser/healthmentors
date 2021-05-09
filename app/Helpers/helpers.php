<?php

/***
 * getting category name
 */
function getCategoryName($catId) {
    $data    = \App\blogCategory::whereId($catId)->first();
    return $data['name'];
}

/**
 * getting all country
 */
function country() {
    return \App\country::get();
}


/**
 * function for aprint
 */
function aprint($data) {
       echo "<pre>";
       print_r($data);
       exit;
       die();
}

function getAdsDetails($id) {
     return $details  = \App\ads::whereId($id)->first();
}

function allCategories() {
    $data   =  \App\blogCategory::get();
    return $data;
}


function getCategories($selected  = null)
{
    echo '<select name="category" id="" class="form-control">
           <option value="">Choose Category</option>';
    $allCategories   =  \App\blogCategory::get();
    foreach ($allCategories as $key => $value) {
        # code...
        if($value['id']  == $selected) {
            echo "<option value='".$value['id']."' selected>".$value['name']."</option>";
        } else {
            echo "<option value='".$value['id']."'>".$value['name']."</option>";
        }
    }
    echo '</select>';
}


/**
 * function for domain 
 */

  function updateDomain($id)
  {
      $domain = config('role.MENTORSTITLE');
      echo '<select name="domain" id="" class="form-control">';
      foreach ($domain as $key => $value) {
          # code...
          if($key  == $id) {
            echo "<option  selected value=".$key.">".$value."</option>";
          } else {
            echo "<option value=".$key.">".$value."</option>";

          }
      }

      echo "</select>";
  }

  /**
   * update coutntry
   */
  function updateCountry($id = false)
  {
    $countries  = \App\country::get();
    echo '<select class="form-control" id="country" name="country">';
    echo '<option class="hidden"  selected disabled>Please select your Country</option>';
  
   foreach($countries as $key => $value):
    if($id  == $value->country_id) { 
        echo   '<option selected value="'.$value->country_id.'">'.$value->country_name.'</option>';

    } else {
        echo   '<option value="'.$value->country_id.'">'.$value->country_name.'</option>';

    }
   endforeach;

    echo  '</select>';
  }

  function updateState($id= false)
  {
      $states  = \App\state::get();

      echo '<select class="form-control" id="state" name="state">';
      echo '<option class="hidden"  selected disabled>Please select your State</option>';
  
      foreach ($states as $key => $value) {
        # code...
        if($id == $value->state_id) {
            echo  '<option selected value="'.$value->state_id.'">'.$value->state_name.'</option>';

        } else{
            echo  '<option value="'.$value->state_id.'">'.$value->state_name.'</option>';

        }
    }

    echo "</select>";
  }

  function updateCity($id) 
  {
      $cities  = \App\city::get();

      echo '<select class="form-control" id="city" name="city">';
     echo  '<option class="hidden"  selected disabled>Please select your City</option>';
     

      foreach ($cities as $key => $value) {
        # code...
        if($id == $value->city_id) {
            echo '<option selected value="'.$value->city_id.'">'.$value->city_name.'</option>';

        } else {
            echo '<option value="'.$value->city_id.'">'.$value->city_name.'</option>';

        }
    }

    echo 
  '</select>';
  }

