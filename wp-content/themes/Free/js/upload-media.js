var image_field;
jQuery(function($){
  $(document).on('click', 'input.select-img', function(evt){
    image_field = $(this).siblings('.img');
    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
    return false;
  });

//      $(document).on('click', '.madd', function(evt){
// var count = $('#c').val();

// count=parseInt(count)+1;
// alert(count);
// $('#c').val('');
// $('#c').val(count);
// alert($(".hi").html());


//  $('.hi').append('<p> ToolTip Text <input type="text" name="songs['+count+'][title]" id="songs['+count+'][title]" value="" /> <span class="remove">Remove Track</span></p>' );
//             return false;

     
//         //     count = count + 1;

//         //     $('#here').append('<p> Song Title <input type="text" name="songs['+count+'][title]" value="" /> -- Track number : <input type="text" name="songs['+count+'][track]" value="" /><span class="remove">Remove Track</span></p>' );
//         //     return false;
//         });
//         $(".remove").live('click', function() {
//             $(this).parent().remove();
//         });
  window.send_to_editor = function(html) {
    imgurl = $('img', html).attr('src');
    alert(imgurl);
    image_field.val(imgurl);
    tb_remove();
  }
    var maxField = 10; //Input fields increment limitation
  var addButton = $('.add_button'); //Add button selector
  var wrapper = $('.field_wrapper'); //Input field wrapper
  var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a></div>'; //New input field html 
  var x = 1; //Initial field counter is 1
  
  $(addButton).click(function(){ //Once add button is clicked
    if(x < maxField){ //Check maximum number of input fields
      x++; //Increment field counter
      $(wrapper).append(fieldHTML); // Add field html
    }
  });
  $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
  });
});