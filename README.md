# _Address Book_

#### _Address book for friends and family, using Twig to display each page, March 17, 2017_

#### By _**Zach Beecher**_

## Description

_Address book to store contact info for friends and family, using twig to display each page. Contact class with private properties for security reasons. Getters and Setters to access private properties, etc_

## Specs

* _Declare a Contact class, including properties to store name, phone, address, email, which are private, using a getter and setter to retrieve private data_
* _Set up a constructor to call upon instances of said Contact Class._
* _Set up Methods to save a Contact, retrieve Contact and delete all Contact._
* _Homepage localhost:8000 will display Contact and offer a form to create a new Contact._
* _After user submits form, new Contact will be stored in SESSION, user will navigate to the URL /create_contact, where the name, phone, address of new contact is displayed. It will also have a link back to home page at root path of URL "/", showing a list of all saved contacts._
* _Add a form with a clear button at the bottom of home page, when pressed it deletes all contacts, take user to confirmation page /delete_contacts. On this page they will be shown confirmation message saying "Address book cleared!". There will be a link back to home page root path._
* _Use Twig to template out the pages.
* _Create constructor, private properties, getters, setters, save method, getAll(), deleteAll() methods, too._
* _Contact class will be an object, and store values in a valid fashion._

## Github repo
* https://github.com/ziggity/addressbookPHPtwigSilex

## Setup/Installation Requirements

* _Clone repo_
* _run localhost8000 in folder web_
* _open localhost:8000 server_
* _update composer if required_



## Known Bugs

_None at this time_

## Support and contact details

_reach out on twitter - details to contact me: @zachbeecher on twitter!!_

## Technologies Used

_HTML, CSS, bootstrap, twig, silex_

### License

*MIT License*

Copyright (c) 2017 **_Zach Beecher_**
