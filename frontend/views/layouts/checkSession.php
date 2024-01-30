<?php
$response['status'] = '';
$response['message'] = '';
$response['text'] = '';


if (Yii::$app->session->hasFlash('error')) {
    $response['status'] = 'error';
    $response['message'] = Yii::$app->session->getFlash('error');
    Yii::$app->session->removeFlash('error');
}
if (Yii::$app->session->hasFlash('success')) {
    $response['status'] = 'success';
    $response['message'] = Yii::$app->session->getFlash('success');
    Yii::$app->session->removeFlash('success');
}
if (Yii::$app->session->hasFlash('text')) {
    $response['text'] = Yii::$app->session->getFlash('text');
    Yii::$app->session->removeFlash('text');
}


$status = $response['status'];
$message = $response['message'];
$text = $response['text'];

$removeTitle = Yii::t('app', 'Are you sure?');
$removeText = Yii::t('app', 'You won\'t be able to revert this!');
$deleteText = Yii::t('app', 'It will be deleted from base! Think about it ! ! !');
$logOutText = Yii::t('app', 'You are about to leave the program!');
$confirmLogOut = Yii::t('app', 'Yes');
$cancelLogOut = Yii::t('app', 'No');
$deleteButton = Yii::t('app', 'Delete');
$cancelButton = Yii::t('app', 'Cancel');
$detailed = Yii::t('app', 'Detailed');
$js = <<<JS

if ('{$status}') {
    Swal.fire({
        title: '{$message}',
        html: '{$text}',
        icon: '{$status}',

      // timer: 2000
    }); 
}

$('body').delegate(".remove-button-confirm", "click", function(e){
    e.preventDefault();
    let tr = $(this).parents('tr');
    let url = $(this).attr('href');
    Swal.fire({
      title: '{$removeTitle}',
      text: "{$removeText}",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: "{$deleteButton}",
      cancelButtonText: "{$cancelButton}"
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
            url:url,
            type: "POST",
            success: function (result){
                if (result.status === true){
                    Swal.fire({
                      title: result.message,
                      icon: result.icon,
                      // timer: 2000
                    });
                    $(tr).remove();
                }else{
                    Swal.fire({
                      title: result.message,
                      icon: result.icon,
                      // timer: 2000
                    });
                }
            }
        })
      }
    })
});
$('body').delegate(".delete-button-confirm", "click", function(e){
    e.preventDefault();
    let tr = $(this).parents('tr');
    let url = $(this).attr('href');
    Swal.fire({
      title: '{$removeTitle}',
      text: "{$deleteText}",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: "{$deleteButton}",
      cancelButtonText: "{$cancelButton}"
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
            url:url,
            type: "POST",
            success: function (result){
                if (result.status === true){
                    Swal.fire({
                      title: result.message,
                      icon: result.icon,
                      // timer: 2000
                    });
                    $(tr).remove();
                }else{
                    Swal.fire({
                      title: result.message,
                      icon: result.icon,
                      // timer: 2000
                    });
                }
            }
        })
      }
    })
});
$('body').delegate(".log-out-button", "click", function(e){
    e.preventDefault();
    let url = $(this).attr('data-url');
    Swal.fire({
      title: '{$removeTitle}',
      text: "{$logOutText}",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: "{$confirmLogOut}",
      cancelButtonText: "{$cancelLogOut}"
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
            url:url,
            type: "POST",
            success: function (result){
                if (result.status === true){
                    Swal.fire({
                      title: result.message,
                      icon: result.icon,
                      // timer: 2000
                    });
                }else{
                    Swal.fire({
                      title: result.message,
                      icon: result.icon,
                      // timer: 2000
                    });
                }
            }
        })
      }
    })
});


JS;
$this->registerJs($js);