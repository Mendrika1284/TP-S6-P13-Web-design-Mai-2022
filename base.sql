DROP DATABASE Rechauffement;
CREATE DATABASE Rechauffement;
use Rechauffement;

CREATE TABLE Question(
    id int not null primary key auto_increment,
    representation varchar(100),
    question varchar(256)
);

CREATE TABLE Cause(
    id int not null primary key auto_increment,
    idQuestion int not null references Question(id),
    detail text
);

CREATE TABLE Consequence(
    id int not null primary key auto_increment,
    idQuestion int not null references Question(id),
    representation varchar(100),
    titre varchar(100),
    consequence text
);

CREATE TABLE Solution(
    id int not null primary key auto_increment,
    idQuestion int not null references Question(id),
    solution varchar(100)
);

INSERT INTO Question VALUES
(null,"cause-bg.jpg","Quelles sont les causes connues du réchauffement climatique ?"),
(null,"cons-bg.jpg","Quelles sont les conséquences de ce réchauffement climatique ?"),
(null,"solution-bg.jpg","Les solutions envisagées contre le réchauffement climatique ?");

INSERT INTO Cause VALUES
(null,1,"Cette augmentation de la chaleur serait due à l’homme. La combustion des combustibles fossiles a libéré des gaz à effet de serre dans l’atmosphère, qui emprisonnent la chaleur du soleil et font monter les températures de surface et de l’air.

Les scientifiques attribuent la tendance au réchauffement climatique observée depuis le milieu du 20e siècle à l’expansion humaine de l' »effet de serre « 1 – réchauffement qui se produit lorsque l’atmosphère piège la chaleur rayonnant de la Terre vers l’espace.

Certains gaz présents dans l’atmosphère empêchent la chaleur de s’échapper. Les gaz à longue durée de vie qui restent de manière semi-permanente dans l’atmosphère et ne réagissent pas physiquement ou chimiquement aux changements de température sont décrits comme des gaz qui « forcent » le changement climatique. Les gaz, tels que la vapeur d’eau, qui réagissent physiquement ou chimiquement aux changements de température sont considérés comme des « rétroactions ».");

INSERT INTO Consequence VALUES
(null,2,"cons1.jpg","Des conditions météorologiques plus fréquentes et plus sévères","La hausse des températures aggrave de nombreux types de catastrophes, notamment les tempêtes, les vagues de chaleur, les inondations et les sécheresses. Un climat plus chaud crée une atmosphère qui peut recueillir, retenir et laisser tomber plus d’eau, ce qui modifie les schémas météorologiques de telle sorte que les zones humides deviennent plus humides et les zones sèches plus sèches. « Les phénomènes météorologiques extrêmes coûtent de plus en plus cher », déclare Aliya Haq, directrice adjointe de l’initiative Clean Power Plan de la NRDC. « Le nombre de catastrophes météorologiques d’un milliard de dollars devrait augmenter ».

Selon la National Oceanic and Atmospheric Administration, en 2015, il y a eu 10 catastrophes météorologiques et climatiques aux États-Unis, dont de violentes tempêtes, des inondations, des sécheresses et des incendies, qui ont causé au moins 1 milliard de dollars de pertes. À titre de comparaison, chaque année entre 1980 et 2015, la moyenne des catastrophes s’est élevée à 5,2 milliards de dollars (corrigée de l’inflation). Si l’on se concentre sur les années entre 2011 et 2015, on constate un coût annuel moyen de 10,8 milliards de dollars.

Le nombre croissant de sécheresses, de tempêtes intenses et d’inondations que nous observons à mesure que notre atmosphère se réchauffe – et qu’elle se vide ensuite – pose également des risques pour la santé et la sécurité publiques. Les périodes de sécheresse prolongées signifient bien plus que des pelouses brûlées. Les conditions de sécheresse compromettent l’accès à l’eau potable, alimentent des incendies incontrôlés et provoquent des tempêtes de poussière, des chaleurs extrêmes et des inondations soudaines aux États-Unis. Ailleurs dans le monde, le manque d’eau est une des principales causes de décès et de maladies graves. À l’opposé, des pluies plus abondantes font déborder les ruisseaux, les rivières et les lacs, ce qui nuit à la vie et aux biens, contamine l’eau potable, provoque des déversements de matières dangereuses et favorise l’infestation de moisissures et un air malsain. Un monde plus chaud et plus humide est également une aubaine pour les maladies d’origine alimentaire et hydrique et les insectes porteurs de maladies comme les moustiques, les puces et les tiques."),
(null,2,"cons2.jpg","L’air sera moins sain","La hausse des températures aggrave également la pollution atmosphérique en augmentant l’ozone au niveau du sol, qui est créé lorsque la pollution des voitures, des usines et d’autres sources réagit à la lumière du soleil et à la chaleur. L’ozone troposphérique est le principal composant du smog, et plus il fait chaud, plus nous en avons. L’air plus sale est lié à l’augmentation des taux d’admission dans les hôpitaux et des taux de mortalité des asthmatiques. Il aggrave la santé des personnes souffrant de maladies cardiaques ou pulmonaires. Et les températures plus chaudes augmentent aussi considérablement la quantité de pollen en suspension dans l’air, ce qui est une mauvaise nouvelle pour ceux qui souffrent de rhume des foins et d’autres allergies."),
(null,2,"cons3.jpg","Des taux d’extinction de la faune plus élevés","En tant qu’humains, nous sommes confrontés à une foule de défis, mais nous ne sommes certainement pas les seuls à attraper la chaleur. Alors que la terre et la mer subissent des changements rapides, les animaux qui y vivent sont condamnés à disparaître s’ils ne s’adaptent pas assez vite. Certains s’en sortiront, d’autres pas. Selon l’évaluation du Groupe d’experts intergouvernemental sur l’évolution du climat de 2014, de nombreuses espèces terrestres, d’eau douce et océaniques déplacent leur aire de répartition géographique vers des climats plus frais ou des altitudes plus élevées, pour tenter d’échapper au réchauffement. Elles modifient également leurs comportements saisonniers et leurs schémas migratoires traditionnels. Et pourtant, nombre d’entre elles sont toujours confrontées à un « risque d’extinction accru en raison du changement climatique ». En effet, une étude réalisée en 2015 a montré que les espèces de vertébrés, c’est-à-dire les animaux dotés d’une colonne vertébrale comme les poissons, les oiseaux, les mammifères, les amphibiens et les reptiles, disparaissent 114 fois plus vite qu’ils ne devraient disparaître, un phénomène qui a été lié au changement climatique, à la pollution et à la déforestation."),
(null,2,"cons4.jpg","Des océans plus acides","Les écosystèmes marins de la Terre sont sous pression en raison du changement climatique. Les océans deviennent plus acides, en grande partie à cause de l’absorption d’une partie de nos émissions excédentaires. Cette acidification s’accélérant, elle constitue une menace sérieuse pour la vie sous-marine, en particulier pour les créatures ayant une coquille ou un squelette en carbonate de calcium, notamment les mollusques, les crabes et les coraux. Cela peut avoir un impact énorme sur la pêche des coquillages. En effet, en 2015, l’acidification aurait coûté près de 110 millions de dollars à l’industrie ostréicole du nord-ouest du Pacifique. Les communautés côtières de 15 États qui dépendent de la récolte annuelle d’un milliard de dollars d’huîtres, de palourdes et d’autres mollusques décortiqués à l’échelle nationale sont confrontées à des risques économiques à long terme similaires."),
(null,2,"cons5.jpg","L’augmentation du niveau de la mer","Les régions polaires sont particulièrement vulnérables au réchauffement de l’atmosphère. Les températures moyennes dans l’Arctique augmentent deux fois plus vite qu’ailleurs sur terre, et les calottes glaciaires du monde entier fondent rapidement. Cette situation a non seulement de graves conséquences pour la population, la faune et la flore de la région, mais elle pourrait aussi avoir des conséquences plus graves sur l’élévation du niveau des mers. D’ici 2100, on estime que le niveau de nos océans augmentera de 30 cm à 1,20 m, menaçant les systèmes côtiers et les zones de faible altitude, y compris des nations insulaires entières et les plus grandes villes du monde, dont New York, Los Angeles et Miami ainsi que Mumbai, Sydney et Rio de Janeiro.

Il n’y a aucun doute : Le changement climatique promet un avenir effrayant, et il est trop tard pour revenir en arrière. Nous y avons déjà remédié en rejetant dans l’air, presque sans contrôle, l’équivalent d’un siècle de pollution. « Même si nous arrêtions toutes les émissions de dioxyde de carbone demain, nous verrions encore certains effets », déclare M. Haq. C’est bien sûr la mauvaise nouvelle. Mais il y a aussi de bonnes nouvelles. En réduisant agressivement nos émissions globales maintenant, « nous pouvons éviter beaucoup des conséquences graves que le changement climatique entraînerait autrement », dit Haq.");

INSERT INTO Solution VALUES
(null,3,"La modifications des habitudes alimentaires"),
(null,3,"La réduction de la consommation de viande"),
(null,3,"La lutte contre la déforestation"),
(null,3,"La préservation des océans"),
(null,3,"La consommation d’énergie propre (changement de fournisseur d’énergie)"),
(null,3,"La réduction de la consommation énergétique"),
(null,3,"Le tri des déchets"),
(null,3,"L’économie circulaire"),
(null,3,"Les modes de transports verts"),
(null,3,"La compensation de la consommation carbone");