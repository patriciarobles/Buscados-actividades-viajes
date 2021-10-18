

    function bookActivity(route,id,num,price,date){
        
        $.ajax({
            url: route,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method:"POST",
            data:{
              id:id,
              num:num,
              price:price,
              date:date,
            },

            success:function(response){

                window.location.href = response.url;
              
            },
              
           });

    }
    
