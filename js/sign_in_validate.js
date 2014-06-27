  $().ready(function() {
            $("#signin").validate({
                rules: {
                 username:  {
                        required: true
                    },
                    password: {
                        required: true,
                    },
                }
             }); 
});
