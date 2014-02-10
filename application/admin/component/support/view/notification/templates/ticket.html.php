<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?= $subject ?></title>
<style type="text/css">
    /* Client-specific Styles */
    #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
    body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
    body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

    /* Reset Styles */
    body{margin:0; padding:0;}
    img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
    table td{border-collapse:collapse;}
    #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

    /* Template Styles */

    /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */

    /**
    * @tab Page
    * @section background color
    * @tip Set the background color for your email. You may want to choose one that matches your company's branding.
    * @theme page
    */
    body, #backgroundTable{
        /*@editable*/ background-color:#FAFAFA;
    }

    /**
    * @tab Page
    * @section email border
    * @tip Set the border for your email.
    */
    #templateContainer{
        /*@editable*/ border: 1px solid #DDDDDD;
    }

    .comment {
        border-top: 1px dotted #d3d3d3;
        padding-top: 20px;
        margin-top: 10px;
    }

    /**
    * @tab Page
    * @section heading 2
    * @tip Set the styling for all second-level headings in your emails.
    * @style heading 2
    */
    h2, .h2{
        /*@editable*/ color:#202020;
        display:block;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:30px;
        /*@editable*/ font-weight:bold;
        /*@editable*/ line-height:100%;
        margin-top:0;
        margin-right:0;
        margin-bottom:10px;
        margin-left:0;
        /*@editable*/ text-align:left;
    }

    /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */

    /**
    * @tab Header
    * @section header style
    * @tip Set the background color and border for your email's header area.
    * @theme header
    */
    #templateHeader{
        /*@editable*/ background-color:#FFFFFF;
        /*@editable*/ border-bottom:0;
    }

    /**
    * @tab Header
    * @section header text
    * @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
    */
    .headerContent{
        /*@editable*/ color:#202020;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:34px;
        /*@editable*/ font-weight:bold;
        /*@editable*/ line-height:100%;
        /*@editable*/ padding:0;
        /*@editable*/ text-align:center;
        /*@editable*/ vertical-align:middle;
    }

    /**
    * @tab Header
    * @section header link
    * @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
    */
    .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
        /*@editable*/ color:#336699;
        /*@editable*/ font-weight:normal;
        /*@editable*/ text-decoration:underline;
    }

    #headerImage{
        height:auto;
        max-width:600px !important;
    }

    /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */

    /**
    * @tab Body
    * @section body style
    * @tip Set the background color for your email's body area.
    */
    #templateContainer, .bodyContent{
        /*@editable*/ background-color:#FFFFFF;
    }

    /**
    * @tab Body
    * @section body text
    * @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
    * @theme main
    */
    .bodyContent div{
        /*@editable*/ color:#505050;
        /*@editable*/ font-family:Arial;
        /*@editable*/ font-size:14px;
        /*@editable*/ line-height:150%;
        /*@editable*/ text-align:left;
    }

    /**
    * @tab Body
    * @section body link
    * @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
    */
    .bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
        /*@editable*/ color:#336699;
        /*@editable*/ font-weight:normal;
        /*@editable*/ text-decoration:underline;
    }
</style>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
<center>
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
        <tr>
            <td align="center" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                    <tr>
                        <td align="center" valign="top">
                            <!-- // Begin Template Header \\ -->
                            <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                                <tr>
                                    <td class="headerContent">

                                        <!-- // Begin Module: Standard Header Image \\ -->
                                        <img src="http://www.lokalepolitie.be/theme/mobile/images/logo-nl.jpg" style="max-width:600px;" id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext />
                                        <!-- // End Module: Standard Header Image \\ -->

                                    </td>
                                </tr>
                            </table>
                            <!-- // End Template Header \\ -->
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <!-- // Begin Template Body \\ -->
                            <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                <tr>
                                    <td valign="top" class="bodyContent">

                                        <!-- // Begin Module: Standard Content \\ -->
                                        <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                            <tr>
                                                <td valign="top">
                                                    <div mc:edit="std_content00">
                                                        <h2 class="h2"><?= $subject ?></h2>

                                                        <p><?= $author->getName() ?> has created a new ticket <a href="<?= $url ?>"><?= $ticket->title ?></a></p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // End Module: Standard Content \\ -->

                                    </td>
                                </tr>
                            </table>
                            <!-- // End Template Body \\ -->
                        </td>
                    </tr>
                </table>
                <br />
            </td>
        </tr>
    </table>
</center>
</body>
</html>