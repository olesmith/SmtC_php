array
(
    //Access pertaining (strictly) to the application
    "Help" => array
    (
        "Href"     => "",
        "HrefArgs" => "ModuleName=#Module&Action=Help",
        "Name"    => "Ajuda",
        "Title"     => "Ajuda",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"   => 1,
        "Distributor"   => 1,
        "Coordinator"   => 1,
        "Teacher"   => 1,
        "Handler"   => "MyApp_Handle_Help",
        "AccessMethod"   => "MyApp_Handle_Help_Has",
    ),
    "Start" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Início",
        "Title_ES" => "Início",
        "Title_UK" => "Start",
        "Name"     => "Início",
        "Name_ES"     => "Início",
        "Name_UK"     => "Start",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"    => 1,

        "Handler"   => "MyApp_Handle_Start",
    ),
    "Top" => array
    (
        "Href"     => "",
        "HrefArgs" => "Action=Top",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"    => 1,
        "NoHeads"  => 1,
        "Handler"  => "MyApp_Interface_Body_Top_Handle",
    ),
    "Logon" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Efetuar Login",
        "Title_ES" => "Efetuar Login",
        "Title_UK" => "Do Login",
        "Name"     => "Login",
        "Name_UK"     => "Login",
        "Name_ES"     => "Login",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"    => 1,
        "Handler"   => "MyApp_Handle_Logon",
        "AccessMethod" => "MyApp_Logon_May",
    ),
    "Logoff" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Sair do Sistema",
        "Title_ES" => "Salir del Sistema",
        "Title_UK" => "Logoff from the system",
        "Name"     => "Sair",
        "Name_UK"  => "Logoff",
        "Name_ES"  => "Salir",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "MyApp_Handle_Logoff",
        "NoHeads"   => 1,
    ),
    "NewPassword" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Trocar sua Senha",
        "Title_UK" => "Change Your Password",
        "Title_ES" => "Cambiar su Contraseña",

        "Name"     => "Alterar Senha",
        "Name_UK"  => "Change Password",
        "Name_ES"  => "Cambiar Contraseña",
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "MyApp_Login_Password_Change_Form",
    ),
    "NewLogin" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Alterar Email (Login)",
        "Title_UK" => "Change Email (Login)",
        "Name"     => "Alterar Email",
        "Name_UK"  => "Change Email",
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "ChangeLoginForm",
    ),
    "MyData" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Atualizar seus Dados Pessoas",
        "Title_UK" => "Update Your Personal Data",
        "Name"     => "Dados Pessoa",
        "Name_UK"  => "Personal Data",
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "HandleMyData",
    ),
    "SU" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "AddIDArg"   => 0,
        "Title_ES" => "Cambiar Usuário",
        "Title"    => "Trocar Usuário",
        "Title_UK" => "Become Another User",
        "Name"     => "SU",
        "Name_UK"  => "SU",
        "Name_ES"  => "SU",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Distributor"   => 1,
        "Coordinator"   => 1,
        "Handler"   => "MyApp_Handle_SU",
    ),
    "Admin" => array
    (
        "Href"     => "",
        "HrefArgs" => "Admin=1",
        "AddIDArg"   => 0,
        "Title"    => "Login como Administrador",
        "Title_UK" => "Become Administrator",
        "Name"     => "Admin",
        "Name_UK"  => "Admin",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "ConditionalAdmin"   => 1,
        "Handler"   => "MyApp_Handle_Admin",
    ),
    "NoAdmin" => array
    (
        "Href"     => "",
        "HrefArgs" => "Admin=0",
        "AddIDArg"   => 0,
        "Title"    => "Deixar de ser Admin",
        "Title_UK" => "Leave Admin Mode",
        "Name"     => "NoAdmin",
        "Name_UK"  => "NoAdmin",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "ConditionalAdmin"   => 1,
        "Handler"   => "MyApp_Handle_NoAdmin",
    ),
    "ModPerms" => array
    (
        "Href"     => "",
        "HrefArgs" => "Action=ModPerms",
        "AddIDArg"   => 0,
        "Title"    => "Módulos e Permissões",
        "Title_UK" => "Modules and Permissions",
        "Name"     => "Módulos",
        "Name_UK"  => "Modules",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "ConditionalAdmin"   => 1,
        "Handler"   => "MyApp_Handle_ModPerms",
    ),

    "Register" => array
    (
        "Href"     => "",
        "HrefArgs" => "?Action=Register",
        "Title"    => "Cadastrar-se",
        "Title_UK" => "Register",
        "Name"     => "Cadastrar-se",
        "Name_UK"     => "Register",
        "Public"   => 1,
        "Person"   => 0,
        "Admin"    => 0,
        "Handler"   => "HandleNewRegistration",
    ),
    "Confirm" => array
    (
        "Href"     => "",
        "HrefArgs" => "?&Action=Confirm",
        "Title"    => "Confirmar Cadastro",
        "Title_UK" => "Confirm Registration",
        "Name"     => "Confirmar Cadastro",
        "Name_UK"  => "Confirm Registration",
        "Public"   => 1,
        "Person"   => 0,
        "Admin"    => 0,
        "Handler"   => "HandleNewRegistration",
    ),
    "ResendConfirm" => array
    (
        "Href"     => "",
        "HrefArgs" => "?Action=ResendConfirm",
        "Title"    => "Reenviar Código de Confirmação",
        "Title_UK" => "Resend Confirmation Code",
        "Name"     => "Reenviar Código de Confirmação",
        "Name_UK"  => "Resend Confirmation Code",
        "Public"   => 1,
        "Person"   => 0,
        "Admin"    => 0,
        "Handler"   => "HandleNewRegistration",
    ),
    "Recover" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Recuperar sua Senha",
        "Title_ES" => "Recuperar su Contraseña",
        "Title_UK" => "Recover Your Password",
        "Name"     => "Recuperar Senha",
        "Name_UK"  => "Recover Password",
        "Name_UK"  => "Recuperar Contraseña",
        "Public"   => 1,
        "Person"   => 0,
        "Admin"   => 0,
        "Handler"   => "Login_Password_Recover_Handle",
    ),
    "LeftMenu" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Menu Esquerda",
        "Title_UK" => "Left Menu",
        "Name"     => "Menu Esquerda",
        "Name_UK"  => "Left Menu",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"    => 1,
        "Handler"  => "",
        "Handler"  => "MyApp_Interface_LeftMenu_Handle",
    ),
    "Sessions" => array
    (
        "Href"     => "",
        "HrefArgs" => "",
        "Handler"  => "MyApp_Handle_Sessions",
    ),
);
