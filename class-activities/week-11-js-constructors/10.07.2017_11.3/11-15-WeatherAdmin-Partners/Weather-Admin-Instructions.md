# ** Step 1 Instructions -- This is a partner activity! **

* As a best practice, sketch the architecture of your application _before_ you start writing code.

* For this exercise, start by describing what your application does. Do this in a bullet list.

* Next, decide how you might divvy up these responsibilities. Would you write a single module that handles all of them? Would you write one module for each bullet list? Something else? Be sure to justify your decision.

* Finally, draw a diagram describing the relationships between your modules. Each arrow should describe a dependency—that is, an arrow from module A to module B indicates that module A uses module B.
| ------------------ |

# **Program Requirements**

* Create a command line interface application using Node.js (either with inquirer or process.argv).

* The application should lead the user to one of two pathways: an Admin View or a User View.

* The User View should prompt the user to provide their Name and the Location they'd like weather information for. Upon completion, the User should get the weather in Fahrenheit at that location.

* The Admin View should simply provide an array of every user's search while also including the "date" of each search. See sample below:

  * `[{"Ahmed", "Atlanta", "10-15-16"}, {"Adri", "Newark", "10-12-16"}, {"Joe", "Omaha", "10-10-16"}]`

--------------

## Notes

* In order to complete this activity you will need to make use of:

  * The weather-js npm package.

  * Two constructors: One for "UserSearch" and one for "WeatherAdmin".

  * A third file called CLI.js, which will direct where users are directed to.

* This activity borrows from all of the concepts we've covered this week. Pay attention to the following activities:

  * Classroom Example (11.2)

  * Weather-js Example (10.2)
