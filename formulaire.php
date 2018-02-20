<form method="POST" action="requeteContact.php" class="col-12">
    <div class="row">
        <span class="form-group col-xs-12 col-md-6">
            <label>Nom</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="nom">
        </span>
        <span class="form-group col-xs-12 col-md-6">
            <label>Tel</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="telephone">
        </span>
    </div>
    <div class="row">
        <span class="form-group col-xs-12 col-md-6">
            <label>E-mail</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="mail">
        </span>
        <span class="form-group col-xs-12 col-md-6">
            <label>Sujet</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="sujet">
        </span>
    </div>


    <div class="row">
        <span class="form-group col-12">
            <label>Message </label>
            <textarea class="form-control" rows="25" name="message"></textarea>
        </span>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary col-2 offset-9">Envoyer</button>
    </div>
</form>
