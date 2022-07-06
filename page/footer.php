<!-- jQuery Frameworks
    ============================================= -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    <?php

    $error = $action->session->get('error');
    $success = $action->session->get('success');

    if ($error) {
    ?>

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Toast.fire({
            icon: 'error',
            title: '<?= $error ?>'
        });

    <?php
        $action->session->delete('error');
    }
    ?>

    <?php
    if ($success) {
    ?>

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Toast.fire({
            icon: 'success',
            title: '<?= $success ?>'
        });

    <?php
        $action->session->delete('success');
    }
    ?>

    $("#addskill").click(function() {
        var skill = $("#userskill").val();
        if (!skill) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Enter a skill'
            });
            return;
        }
        $("#skills").append(`<span class="badge bg-danger p-1 m-1">${skill} <input type='hidden' name='skill[]' value='${skill}'/> <span class="removeskill" onclick='removeskill(this)'>X</span> </span>`);
        $("#userskill").val(``);
    });

    $("#addEducation").click(function() {
        var college = $("#college").val();
        var course = $("#course").val();
        var e_duration = $("#e_duration").val();
        if (!college) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Enter a college/institute'
            });
            return;
        }
        if (!e_duration) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Enter a course duration'
            });
            return;
        }
        if (!course) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Enter a course'
            });
            return;
        }
        $("#educations").append(`
                <div class="d-inline-block border rounded p-2 my-2">
            <input type="hidden" name="college[]" value="${college}">
            <input type="hidden" name="course[]" value="${course}">
            <input type="hidden" name="e_duration[]" value="${e_duration}">

                    <h4>${college}</h4>
                    <p>${course} - ${e_duration}</p>
                    <button type="button" class="btn-sm btn-danger" onclick="removeEducation(this)">Remove</button>
                </div>`);
        $("#college").val(``);
        $("#course").val(``);
        $("#e_duration").val(``);
    });

    $("#addExps").click(function() {
        var company = $("#company").val();
        var jobrole = $("#jobrole").val();
        var c_duration = $("#c_duration").val();
        var about = $("#work_desc").val();
        if (!company) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Enter a Company duration'
            });
            return;
        }
        if (!c_duration) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Enter a course duration'
            });
            return;
        }
        if (!jobrole) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: 'error',
                title: 'Enter a job role'
            });
            return;
        }

        $("#exps").append(`
                <div class="d-inline-block border rounded p-2 my-2">
            <input type="hidden" name="company[]" value="${company}">
            <input type="hidden" name="jobrole[]" value="${jobrole}">
            <input type="hidden" name="c_duration[]" value="${c_duration}">
            <textarea class="d-none" name="work_desc[]">
            ${about}
            </textarea>

                    <h4>${company}</h4>
                    <p>${jobrole} - ${c_duration}</p>
                    <p>${about}</p>
                    <button type="button" class="btn-sm btn-danger" onclick="removeExps(this)">Remove</button>
                </div>`);
        $("#company").val(``);
        $("#jobrole").val(``);
        $("#c_duration").val(``);
        $("#work_desc").val(``);
    });

    function removeskill(button) {
        $(button).parent().remove();
    }

    function removeEducation(button) {
        $(button).parent().remove();
    }

    function removeEducation(button) {
        $(button).parent().remove();
    }
</script>

</body>

</html>