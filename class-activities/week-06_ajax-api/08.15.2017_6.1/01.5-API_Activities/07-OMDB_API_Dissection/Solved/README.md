# Activity Instructions

1. Break down the following URL:
	http://www.omdbapi.com/?t=Forrest+Gump&y=&plot=short&apikey=40e9cece 

	and be able to explain each parameter listed here:
	- ?
	start of query string

	- t
	title of film

	- +
	the empty space character, " "

	- &
	separates query key-value pairs

	- =
	separates query key and values

	- apikey=40e9cece
	the API key is a value which OMDB uses to determine which account is making the API call 

	- y=
	an empty parameter, y, representing the year of a film's release

	- plot=short
	specifies that the shorter version of a film's plot should be sent

2. How would you display multiple movies that meet a condition? (i.e. how would you get all movies with the word "Matrix" in it?).

  http://www.omdbapi.com/?s=Matrix&y=&plot=short&apikey=40e9cece