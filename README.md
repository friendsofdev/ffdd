# FrameWork Free Driven Design

Base on Domain Drive Design but with controller and view integer.

I design this project to build you project and move it from a framework to another, to upgrade your project from 2 major version.

The concept is to move all the MVC part in the domain.
And to had on the top of it the framework.

The basic view of the FFDD is to have zero "use" of the framework. Only Domain and PHP is use in Domain. 

In the domain you have
* Model
* View (Response)
* Controller

## Model
The model are your business logic object (book, user, ...) 

## Controller
For the controller we just config you framework to call your class (here we use the yaml).

## Response
For the response we use Interface that are implementing classes in Infra. 
Also we need often a serializer that we use as a interface as well in domain and implement in Infra.

NB: The response can also be renders Interface that we implement in infra.

## DataProvider (how to extract data from your frame  work)
To get data from a framework we use the DataProvider as an interface in domain implementing in Infra

## Service

It's all your business logic function
Example: call repository, set data

### Architecture
* Provider
* Manager
* Factory
* Remover (no common but to remove some element from a model)
* Updater (on big project we often need to tid up our project, so we move updates from the manager or factory)

## Exception

The Exception are handle in the domain also.
You can create new exception that extend from this one, and ahd a specific number to each new exception as a string

## Error

To manages errors we create an object error and validation.
 
Also a dispatcher of errors (I'm not a pro in forms symfony and how to implement it the best way to have all our validation in the domain and just the dispatcher on the form in the Infra). Any Idea ??

## Big project

If you have a big project you can add order you domain with name of your model in all your folder
* src/
    * Domain/
        * Controller
            * Book/
            * Author/
            
            
## Note

Why i didn't use the name of the model as name of my main folder.

Exemple: 

* Domain
    * Book
        * Controller
        * Model
        * ValueObject 
        
This is your call. But for me it mak more complexity on your project. I try both.