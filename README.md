## RESTFull for Symfony 3
====

### Usage : 
composer install 
php app/console doctrine:schema:update --force
router debug :   
  homepage                   ANY      ANY      ANY    /
  app_place_getplace         GET      ANY      ANY    /places/{id}
  app_user_getusers          GET      ANY      ANY    /users
  app_user_getuser           GET      ANY      ANY    /users/{user_id}
  get_places                 GET      ANY      ANY    /places.{_format}
  get_place                  GET      ANY      ANY    /places/{id}.{_format}
 -------------------------- -------- -------- ------ ---------------------------
