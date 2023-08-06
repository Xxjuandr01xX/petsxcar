$(document).ready(function(){
    /**
     * Archivo para interacciones con el modulo de usuarios, en configuracion.
     */
    let url_site = window.location.href.split("/")[6];
    main(url_site);
});

function main(urlSite){
    if(urlSite == "new_user"){
        form_usuarios();
    }else if(urlSite == "users_list"){
        User_list();
    }else{

    }
}

function form_usuarios(){
    $("#tel").inputmask("(9999)-9999999");
    $("#cor").inputmask("email");
    $("#dni").inputmask("9{1,10}");
}

function User_list(){
    $("#users_table").dataTable();
}

