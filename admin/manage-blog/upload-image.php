<?php


if(isset($_FILES['upload'])){


    $file=$_FILES['upload'];


    $allowed=[
        "jpg",
        "jpeg",
        "png",
        "webp"
    ];


    $ext=strtolower(
        pathinfo(
            $file['name'],
            PATHINFO_EXTENSION
        )
    );



    if(!in_array($ext,$allowed)){


        echo json_encode([

            "uploaded"=>0,

            "error"=>[
                "message"=>"Only jpg png webp allowed"
            ]

        ]);

        exit;

    }




    $fileName=time().'_'.$file['name'];



    $path="../uploads/blog/".$fileName;



    if(move_uploaded_file(
        $file['tmp_name'],
        $path
    )){


        echo json_encode([


            "uploaded"=>1,


            "fileName"=>$fileName,


            "url"=>"../uploads/blog/".$fileName


        ]);



    }

}

?>
