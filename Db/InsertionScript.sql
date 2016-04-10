-- Movie Insertions
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00001','Batman vs Superman', '05-05-2016', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00002','Terminator Genisys', '06-25-2015', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00003','Deadpool', '02-12-2016', 3);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00004','Jurassic World', '06-10-2015', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00005','X-Men: Apocalypse', '05-27-2016', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00006','Suicide Squad', '08-04-2016', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00007','The Jungle Book', '06-25-2015', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00008','Mad Max: Fury Road', '05-15-2015', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00009','Creed', '11-19-2015', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00010','Inside Out', '06-19-2015', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00011','Zootopia', '04-04-2016', 10);
INSERT INTO Movie (MovieID, Name, Releasedate, MPAARating) VALUES ('00012','Big Hero 6', '11-7-2014', 10);

-- Actor Injections
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00001','Affleck', 'Ben', '08-15-1972', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00002','Gadot', 'Gal', '04-30-1985', 'Isreal');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00003','Cavill', 'Henry', '05-05-1983', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00004','Eisenberg', 'Jesse', '10-05-1983', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00005','Schwarzenegger', 'Arnold', '07-30-1947', 'Austria');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00006','Pratt', 'Chris', '06-21-1979', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00007','Renolds', 'Ryan', '1-23-1976', 'Canada');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00008','Lawrench', 'Jennifer', '08-15-1990', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00009','Fassbender', 'Michael', '04-02-1977', 'Germany');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00010','Leto', 'Jared', '12-26-1971', 'United Kingdom');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00011','Smith', 'Will', '09-25-1968', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00012','Johansson', 'Scarlett', '11-22-1984', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00013','Murray', 'Bill', '04-21-1979', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00014','Hardy', 'Tom', '09-15-1977', 'England');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00015','B. Jordan', 'Michael', '02-09-1987', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00016','Poehler', 'Amy', '09-16-1971', 'United States');
INSERT INTO Actor (ActorID, Lastname, Firstname, BirthDate, Country) VALUES ('00017','Hader', 'Bill', '06-07-1978', 'United States');

-- Director Injections
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00001','Snyder', 'Zach', 'United States');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00002','Taylor', 'Alan', 'United States');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00003','Miller', 'Tim', 'United States');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00004','Trevorrow', 'Colin', 'United States');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00005','Singer', 'Bryan', 'United States');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00006','Ayer', 'David', 'United States');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00007','Favreae', 'Jon', 'United States');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00008','Miller', 'George', 'Australia');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00009','Coogler', 'Ryan', 'United States');
INSERT INTO Director (DirectorID, Lastname, Firstname, Country) VALUES ('00010','Docter', 'Pete', 'United States');

-- Studio Injections
INSERT INTO Studio (StudioID, Name, Country) VALUES ('00001','Warner Bros.', 'United States');
INSERT INTO Studio (StudioID, Name, Country) VALUES ('00002','RKO-Pictures', 'United States');
INSERT INTO Studio (StudioID, Name, Country) VALUES ('00003','Paramount Pictures', 'United States');
INSERT INTO Studio (StudioID, Name, Country) VALUES ('00004','Universal Studios', 'United States');
INSERT INTO Studio (StudioID, Name, Country) VALUES ('00005','Walt Disney', 'United States');
INSERT INTO Studio (StudioID, Name, Country) VALUES ('00006','MGM', 'United States');
INSERT INTO Studio (StudioID, Name, Country) VALUES ('00007','20th Century Fox', 'United States');
INSERT INTO Studio (StudioID, Name, Country) VALUES ('00008','Pixar', 'United States');

--Directs Injections
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00001','00001'); --Batman/Superman
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00002','00002'); --Terminator
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00003','00003'); --Deadpool
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00004','00004'); --Jurassic World
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00005','00005'); --X-Men Apocolypse
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00006','00006'); --Suicide Squad
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00007','00007'); --The Jungle Book
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00008','00008'); --Mad Max
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00009','00009'); --Creed
INSERT INTO Directs (MovieID, DirectorID) VALUES ('00010','00010'); --Inside Out

--ActorStars Injections
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00001','00001'); --Batman/Superman
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00001','00002'); --Batman/Superman
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00001','00003'); --Batman/Superman
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00001','00004'); --Batman/Superman
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00002','00005'); --Terminator
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00003','00007'); --DeadPool
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00004','00006'); --Jurassic World
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00005','00008'); --X-Men Apocolypse
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00005','00009'); --X-Men Apocolypse
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00006','00010'); --Suicide Squad
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00006','00011'); --Terminator
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00007','00012'); --The Jungle Book
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00007','00013'); --The Jungle Book
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00008','00014'); --Mad Max
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00009','00015'); --Creed
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00010','00016'); --Inside out
INSERT INTO ActorStars (MovieID, ActorID) VALUES ('00010','00017'); --Inside out

--Sponsors Injections
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00001'); --Batman/Superman
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00002'); --Terminator
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00003'); --Deadpool
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00004'); --Jurassic World
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00005'); --X-Men Apocolypse
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00006'); --Suicide Squad
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00007'); --The Jungle Book
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00008'); --Mad Max
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00001','00009'); --Creed
INSERT INTO Sponsors (StudioID, MovieID) VALUES ('00008','00010'); --Inside out

--User Injection
INSERT INTO Users (UserID, password, lastname, firstname, email, city, province, country) VALUES ('TomJ','password', 'Jarrod', 'Tom', 'TJ@gmail.com', 'Ottawa', 'Ontario', 'Canada'); 
INSERT INTO Users (UserID, password, lastname, firstname, email, city, province, country) VALUES ('MovieMan','password', 'Riddle', 'Rory', 'Rawrman@gmail.com', 'Toronto', 'Ontario', 'Canada');
INSERT INTO Users (UserID, password, lastname, firstname, email, city, province, country) VALUES ('SassySuz','password', 'McDonald', 'Susie', 'latherit@gmail.com', 'Mississauga', 'Ontario', 'Canada');

--Topic Injections
INSERT INTO Topics (TopicID, Descirption) VALUES ('00001','Science fiction film/Thriller'); 
INSERT INTO Topics (TopicID, Descirption) VALUES ('00002','Fantasy/Drama'); 
INSERT INTO Topics (TopicID, Descirption) VALUES ('00003','Drama film/Sport '); 
INSERT INTO Topics (TopicID, Descirption) VALUES ('00004','Sci-Fi'); 
INSERT INTO Topics (TopicID, Descirption) VALUES ('00005','Fantasy/Science'); 
INSERT INTO Topics (TopicID, Descirption) VALUES ('00006','Fantasy/Comedy-drama'); 

--MovieTopics Injections
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00005','00001', 'English', 'y', 'Canada'); --Batman/Superman
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00005','00003', 'English', 'y', 'Canada'); --Deadpool
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00005','00002', 'English', 'y', 'Canada'); --Terminator
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00001','00004', 'English', 'y', 'Canada'); --Jurassic World
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00005','00005', 'English', 'y', 'Canada'); --X-Men Apocolypse
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00005','00006', 'Englsih', 'y', 'Canada'); --Suicide Squad
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00002','00007', 'English', 'y', 'Canada'); --The Jungle Book
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00005','00008', 'English', 'y', 'Canada'); --Mad Max
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00003','00009', 'English', 'y', 'Canada'); --Creed
INSERT INTO MovieTopics (TopicID, MovieID, Language, Subtitles, Country) VALUES ('00006','00010', 'English', 'y', 'Canada'); --Inside out

--Role Injections
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00001','Batman', '00001'); --Batman/Superman
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00002','Superman', '00003'); --Batman/Superman
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00003','Superwoman', '00002'); --Batman/Superman
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00004','Terminator', '00005'); --Terminator
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00005','Deadpool', '00007'); --Deadpool
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00006','Owen', '00006'); --Jurassic World
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00007','Magnito', '00009'); --X-Men: Apocalypse
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00008','Mystique', '00008'); --X-Men: Apocalypse
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00009','Joker', '00010'); --Suicide Squad
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00010','Deadshot', '00011'); --Suicide Squad
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00011','Kaa', '00012'); --The Jungle Book
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00012','Baloo', '00013'); --The Jungle Book
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00013','Max', '00014'); --Mad Max
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00014','Creeds Son', '00015'); --Creed
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00015','Joy', '00016'); --Inside out
INSERT INTO Role (RoleID, Name, ActorID) VALUES ('00016','Fear', '00017'); --Inside out