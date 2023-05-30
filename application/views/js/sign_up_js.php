<script>
    $(document).ready(function() {

        if ($('#user').val() != '') {
            $('#form').hide()
        }

        $('code').css('cursor', 'pointer');

        $('#signin_form').click(function() {
            $('#form1').hide()
            $('#form2').show()
        })
        $('#signup_form').click(function() {
            $('#form2').hide()
            $('#form1').show()
        })

        $('#signup').click(function() {
            // alert("yes")
            const name = $('#name').val()
            const email = $('#email').val()
            const pass = $('#pass').val()
            const re_pass = $('#re_pass').val()
            if(name == '')
            {
                alert('Enter name')
                return
            }
            if(email == '')
            {
                alert('Enter email')
                return
            }
            if(pass == '')
            {
                alert('Enter password')
                return
            }
            if(re_pass == '')
            {
                alert('Enter confirm password')
                return
            }
            $.ajax({
                url: "<?=base_url('signup')?>",
                method: 'POST',
                data: {
                    'name': name,
                    'email': email,
                    'pass': pass,
                },
                success: function(data) {
                    $('#form').hide()
                    window.location.reload()
                }

            })
        })

        $('#signin').click(function() {
            // alert("yes")
            const email = $('#l_email').val()
            const pass = $('#l_pass').val()
            $.ajax({
                url: "<?=base_url('signin')?>",
                method: 'POST',
                data: {
                    'email': email,
                    'pass': pass,
                },
                success: function(data) {
                    $('#form').hide()
                    window.location.reload()
                }

            })
        })

    })
</script>