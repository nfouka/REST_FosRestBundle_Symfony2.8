
### Usage

```sh
$ composer install
$ php app/console doctrine:schema:update --update
$ php app/console router:debug
```

### Example
  homepage                   ANY      ANY      ANY    /
  
  app_place_getplace         GET      ANY      ANY    /places/{id}
  
  app_user_getusers          GET      ANY      ANY    /users
  
  app_user_getuser           GET      ANY      ANY    /users/{user_id}
  
  get_places                 GET      ANY      ANY    /places.{_format}
  
  get_place                  GET      ANY      ANY    /places/{id}.{_format}
  
  ### Example (With XML )
  
```xml
<myxml>
<response><item key="0"><id>423</id><name>PLACE ANGLETERRE</name><address>LONDON</address><item key="0"><userId>1</userId><userName>NADIR FOUKA</userName><userPassword>dKJD464VCXCsqsds54ds5d4</userPassword></item></item><item key="1"><id>424</id><name>PARIS</name><address>PARIS</address><item key="0"><userId>1</userId><userName>NADIR FOUKA</userName><userPassword>dKJD464VCXCsqsds54ds5d4</userPassword></item></item><item key="2"><id>425</id><name>LAVAZZA</name><address>RUE MARIUS BLACHET</address><item key="0"><userId>2</userId><userName>MARCIS ANDERSON</userName><userPassword>d45q454wxw6523</userPassword></item></item><item key="3"><id>426</id><name>LAVAZZA</name><address>RUE MARIUS BLACHET</address><item key="0"><userId>3</userId><userName>ANTOINE ROUSSOUX</userName><userPassword>78dsqasqwd</userPassword></item></item></response>
</myxml>
```

  
