
<!DOCTYPE html>
<html>

<head>
    <title>Contactez-moi !!!</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=divice-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http//fonts.googleapis.com/css?family=Lato" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body>

</body>
<div class="container">
    <div class="divider"></div>
    <div class="heading">
        <h2>Contactez-moi</h2>
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <form id="contact-form" method="POST" action="" role="form">
                <div class="row">

                    <div class="col-md-6">
                        <label for="firstname">Prénom<span class="blue">*</span></label>
                        <input type="text" id="firsname" name="firstname" class="form-control" placeholder="Votre prenom" value="">
                        <p class="comments"></p>
                    </div>

                    <div class="col-md-6">
                        <label for="name">Nom<span class="blue"> *</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="">
                        <p class="comments"> </p>
                    </div>

                    <div class="col-md-6">
                        <label for="email">Email<span class="blue"> *</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                        <p class="comments">   </p>
                    </div>

                    <div class="col-md-6">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
                        <p class="comments"> </p>
                    </div>

                    <div class="col-md-12">
                        <label for="message">Message<span class="blue"> *</span> </label>
                        <textarea name="message" id="message" class="form-control" placeholder="Votre message" rows="4" ></textarea>
                        <p class="comments"> </p>
                    </div>

                    <div class="col-md-12">
                        <p la class="blue"><strong>* Ces informatio sont requiises</strong></p>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="button1" value="Envoyer">
                    </div>


                </div>
                





            </form>
        </div>
    </div>
</div>

</html>