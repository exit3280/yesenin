<?php

use Illuminate\Database\Seeder;

class PoemsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $today = date('Y-m-d');
    $poems = [
      [
        'name' => 'Do viđenja, druže',
        'text' => '<h1>Do viđenja, druže</h1><p>Do viđenja, druže, do viđenja. Čuvaju te, mili, moje grudi.<br/>Rastanak je znak predodređenja, Susret nam se u daljini nudi.</p><p>Do viđenja, bez stiska, bez glasa, I ne tuguj spuštene povije.<br/>Nije novo mrijet prije svoga časa, Al\' ni živjet, bogme, nije najnovije.<p>',
        'language_id' => 2,
        'created_at' => $today
      ],[
        'name' => 'Letter to Mother',
        'text' => '<h1>Letter To Mother</h1><p>Are you still alive, my dear old one?<br/>I am still alive. My greetings to you!<br/>May above your home that amazing light<br/>shine on and dispel the evening gloom.</p><p>I was told that they see you very often,<br/>all fearful, and worried about me a lot,<br/>going to the road every now and then,<br/>clad in your old, shabby overcoat.</p><p>That, in the evening darkness, very often,<br/>your mind plays the same tragic part:<br/>In a tavern fight, some ruffian has plunged<br/>a Finish knife straight to my heart.</p><p>Fear not, dear. And don’t be dreary!<br/>It is only fiction through and through.<br/>I am not so a bad drunkard, really,<br/>that I should die without seeing you.</p><p>I am still your tender son as ever,<br/>and the only thing I dream of, when alone,<br/>is to leave this dismal world I live in,<br/>and return to our humble low-roofed home.</p><p>I’ll return in spring and without a warning<br/>when the garden blooms white as snow.<br/>But, please don’t wake me early in the morning,<br/>like you used to do eight years ago.</p><p>Don\'t disturb the dreams already dreamt<br/>don\'t perturb my vain and futile strife,<br/>for I have become tired much too early<br/>from all that sorrow and weariness in life.</p><p>And don\'t teach me how to say my prayers!<br/>There is no way back to what is forever gone.<br/>You alone are my only solitude now,<br/>the remaining light that is still shining on.</p><p>Mother! My dearest! Forget your pain,<br/>do not fear and worry about me so.<br/>A don\'t go to the road every now and then<br/>in that old, shabby overcoat of yours.</p>',
        'language_id' => 1,
        'created_at' => $today
      ],[
        'name' => 'Pismo majci',
        'text' => '<h1>Pismo majci</h1><p>Jesi l\' živa, staričice moja?<br/>Sin tvoj živi i pozdrav ti šalje.<br/>Nek uvečer nad kolibom tvojom<br/>Ona čudna svjetlost sja i dalje.<br/>Pišu mi da viđaju te često<br/>zbog mene veoma zabrinutu<br/>i da ideš svaki čas na cestu<br/>u svom trošnom starinskom kaputu.</p><p>U sutonu plavom da te često<br/>uvijek isto priviđenje muči:<br/>kako su u krčmi finski nož<br/>u srce mi zaboli u tuči.</p><p>Nemaj straha! Umiri se, draga!<br/>Od utvare to ti srce zebe.<br/>Tako ipak propio se nisam<br/>da bih umro ne vidjevši tebe.</p><p>Kao nekad, i sada sam nježan,<br/>i srce mi živi samo snom,<br/>da što prije pobjegnem od jada<br/>i vratim se u naš niski dom.</p><p>Vratit ću se kad u našem vrtu<br/>rašire se grane pune cvijeta.<br/>Samo nemoj da u ranu zoru<br/>budiš me ko prije osam ljeta.</p><p>Nemoj budit odsanjane snove,<br/>nek miruje ono čega ne bi:<br/>odveć rano zamoren životom,<br/>samo čemer osjećam u sebi.</p><p>I ne uči da se molim. Pusti!<br/>Nema više vraćanja ka starom.<br/>Ti jedina utjeha si moja,<br/>svjetlo što mi sija istim žarom.</p><p>Umiri se! Nemoj da te često<br/>viđaju onako zabrinutu,<br/>i ne idi svaki čas na cestu<br/>u svom trošnom starinskom kaputu.</p>',
        'language_id' => 2,
        'created_at' => $today
      ],[
        'name' => 'Pjesma o kuji',
        'text' => '<h1>Pjesma o kuji</h1><p>Jutros je kuja pri štali,<br/>gdje rogoz se zlati pod gredom,<br/>oštenila sedmero mladih,<br/>riđe štenadi redom.</p><p>I jezikom, sve do tmine,<br/>mati ih češljala nježna;<br/>od trbuha njena topline<br/>voda se topila snježna.</p><p>A uveče, kao i vazda,<br/>kad koke na lijegala kreću,<br/>tmuran je stigao gazda<br/>i strpao štenad u vreću.</p><p>Trčati snijegom je stala<br/>slijedeć mu tragove hoda<br/>i dugo uz val do vala<br/>hladna se mreškala voda.</p><p>A kad se od trčanja vruća<br/>i znojna probi kroz sjene<br/>njoj se mjesec vrh kuća<br/>ko njeno pričini štene.</p><p>U plavet je zurila jasnu<br/>i cviljela nasred druma,<br/>a mjesec na putu kasnu<br/>sakri se iza huma.</p><p>I tiho, kao kad s brijega<br/>za bačenim kamenom kreće,<br/>ko zlatne zvijezde sred snijega<br/>kotrljahu oči se pseće.</p>',
        'language_id' => 2,
        'created_at' => $today
      ],[
        'name' => 'The bitch',
        'text' => '<h1>The bitch</h1><p>In the morning the bitch whelped<br/>Seven reddish-brown puppies,<br/>In the rye barn where a row<br/>Of bast mats gleamed like gold.<br/>Licking their pelts smooth,<br/>And underneath her, the snow<br/>Melted out in the heat.</p><p>But at dusk, when the hens<br/>Were roosting on the perch,<br/>There came the grim-faced master<br/>Who stuffed the pups in a sack.</p><p>The bitch bounded alongside him,<br/>Over the snow-deep fields,<br/>And the icy surface of the water<br/>Shuddered a long, long while.</p><p>And when at last she struggled home,<br/>Licking the sweat from her sides,<br/>To her the moon above the house<br/>Seemed like one of the pups.</p><p>Whimpering loudly she gazed up<br/>Limpidly into the dark,<br/>While over the hill, the slender moon<br/>Slid into the fields beyond.</p><p>And softly, as when someone,<br/>Jesting, throws her a stone,<br/>Her tears, like golden stars,<br/>Trickled down into the snow.</p>',
        'language_id' => 1,
        'created_at' => $today
      ],[
        'name' => 'Goodbye my friend',
        'text' => '<h1>Goodbye my friend</h1><p>Goodbye my friend, goodbye my dear,<br/>you are forever in my heart.<br/>Predestined farewell that is near<br/>promises a reunion to those who part.</p><p>Goodbye my friend, without hand or word,<br/>and don’t let sadness furrow your brow,<br/>in this life dying is not a thing unheard<br/>nor is living any newer show.</p>',
        'language_id' => 1,
        'created_at' => $today
      ],[
        'name' => 'Pjevaj, pjevaj!',
        'text' => '<h1>Pjevaj, pjevaj!</h1><p>Pjevaj, pjevaj! Tu kletu gitaru<br/>prsti tvoji oblijeću, i kruže.<br/>U tom cu se otrovati garu,<br/>moj posljednji i jedini druže.</p><p>Grivnu njenu ja gledati neću,<br/>niti svilu sto niz pleća pada.<br/>Tražio sam u toj ženi sreću,<br/>slučajno sam propast naš\'o tada.</p><p>Nisam znao da je ljubav - java,<br/>nisam znao da je ljubav - rana.<br/>Pogledom što čini se da spava<br/>pomela je pamet huligana.</p><p>Pjevaj druže, budi uspomene<br/>na protekle dane lude sreće.<br/>Nek\' i drugog ljubi kao mene<br/>to podbuhlo, ali lijepo smeće.</p><p>Stani malo! Ja je neću kleti.<br/>Stani malo. Neću da je diram.<br/>Daj da tebi o sebi zasviram<br/>na toj struni što pod rukom leti.</p><p>Mojih dana crven svod se lije,<br/>u srcu je ćup zlatnika samih.<br/>Mnogo cura štipao sam prije,<br/>mnogo žena gnječio u tami.</p><p>Da, na Zemlji gorki zakon vrijedi,<br/>gledao sam dječijim okom svojim:<br/>ližu kučku, dok joj sok se cijedi,<br/>svi psi redom, kako stigne koji.</p><p>Zašto, dakle, da patim zbog tebe?<br/>Zašto, dakle, da me snadje jad?<br/>Naš je život - postelja i ćebe.<br/>Naš je život - poljubac i pad.</p><p>Pjevaj, pjevaj! Nek\' se ruke vinu,<br/>njima kuni sudbinu i sreću ...<br/>Neka ide sve u materinu ...<br/>Nikad, druže, ja umrijeti neću.</p>',
        'language_id' => 2,
        'created_at' => $today
      ],[
        'name' => 'Sing, old man, to the bloddy guitar',
        'text' => '<h1>Sing, old man, to the bloody guitar</h1><p>Sing, old man, to the bloody guitar, and<br/>Let your fingers show natural bent.<br/>I would choke in this drunken enchantment<br/>You’re my last and my only friend.</p><p>Don’t you look at her wrist and the blooming<br/>Silky shawl hanging down her head.<br/>I was looking for joy in this woman<br/>But I found perdition instead.</p><p>I did not know that love was infection,<br/>I did not know that love was a plague.<br/>She just came and feigning affection<br/>Drove the rowdy mad, no mistake.</p><p>Sing and let me remember, brother,<br/>Our fidgety youthful whirl.<br/>Let her kiss, pet and fondle another,<br/>Ah, this beautiful wicked girl!</p><p>No, no, wait. I don’t blame her or bully.<br/>No, no, wait. I don’t damn or disgrace.<br/>Let me sing now about yours truly<br/>To the sound of this string of base.</p><p>Rosy vault of my days is streaming.<br/>I’ve got plenty of golden dreams.<br/>I have petted so many young women,<br/>Touched and squeezed them, governed by whims.</p><p>Yes! There is bitter truth of the world<br/>When a child I caught sight of that truth:<br/>Troops of hounds, excited and wild,<br/>Taking turns lick a bitch all in juice.</p><p>Why be jealous of her? I don’t get.<br/>Being sick would mere pretext.<br/>Our life is just bed-sheet and bed.<br/>Our life is a kiss and a vortex.</p><p>Sing , old man! In the fateful sphere<br/>Of these hands is a fated end.<br/>Tell them all to f… out of here.<br/>I will never be dead, my friend.</p>',
        'language_id' => 1,
        'created_at' => $today
      ],[
        'name' => 'You don’t love me and don’t feel compassion',
        'text' => '<h1>You don’t love me and don’t feel compassion</h1><p>You don’t love me and don’t feel compassion.<br/>Don’t you think that now I look my best?<br/>Though you look aside you’re thrilled with passion<br/>As you put your arms upon my chest.</p><p>You are young, so sensitive and zealous,<br/>I am neither bad nor very good to you.<br/>Tell me, did you pet a lot of gentle fellows?<br/>You remember many arms and lips. You do.</p><p>They are gone and haven’t touched you any,<br/>Gone like shadows, leaving you aflame.<br/>You have sat upon the laps of many,<br/>You are sitting now on mine, without shame.</p><p>Though your eyes are closed, and you are rather<br/>Thinking of some one you really trust,<br/>After all, I do not love you either,<br/>I am lost in thought about my dear past.</p><p>Don’t you call this zeal predestination?<br/>Hasty tie is thoughtless and no good, -<br/>Like I set up this unplanned connection,<br/>I will smile when leaving you for good.</p><p>You will go the pathway of your own<br/>Just to have your days unwisely spent,<br/>Don’t approach the ones not fully grown,<br/>Don’t entice the ones that never burnt.</p><p>When you walk with someone down the alley<br/>Chatting merrily about love and all<br/>Maybe, I’ll be out, walking round shyly,<br/>And again, by chance, I’ll meet you, poor soul.</p><p>Squaring shoulders, ravishing and winning,<br/>Bending forward, with an air kiss,<br/>You will utter quietly: Good evening!<br/>And I will reply: Good evening, miss.</p><p>Nothing will disturb my heart and spirit,<br/>Nothing will perturb me giving pain,-<br/>He who’s been in love will not retrieve it,<br/>He who’s burnt will not be lit again.</p>',
        'language_id' => 1,
        'created_at' => $today
      ],[
        'name' => 'The Night',
        'text' => '<h1>The Night</h1><p>The tired day droops, slowly waning,<br/>The noisy waves are now tranquil.<br/>The sun has set, the moon is sailing<br/>Above the world, absorbed and still.</p><p>The valley listens to the babbles<br/>Of peaceful river in the dale.<br/>The forest, dark and bending, slumbers<br/>To warbling of the nightingale.</p><p>The river, listening in and fondling,<br/>Talks with the banks in quiet hush.<br/>And up above resounds, a-rolling,<br/>The merry rustle of the rush.</p>',
        'language_id' => 1,
        'created_at' => $today
      ],[
		'name' => 'I do believe in happiness!',
		'text' => '<h1>I do believe in happiness!</h1><p>I do believe in happiness!<br/>The sun has not yet faded. Rays<br/>Of sunrise like a book of prayers<br/>Predict the happy news. Oh yes!<br/>I do believe in happiness!</p><p>Ring, golden Russia, carry on,<br/>Oh blow you wind, so unabated!<br/>Blessed is the one who celebrated<br/>Your shepherd\'s sadness, hope forlorn.<br/>Ring, golden Russia, carry on!</p><p>I love the wild impetuous streams,<br/>The shine of stars upon the water.<br/>The blessed dejection, crying quarter,<br/>The blessing people and extremes<br/>Of roaring wild impetuous streams.</p>',
		'language_id' => 1,
        'created_at' => $today
      ],[
		'name' => 'I do not regret, and I do not shed tears',
		'text' => '<h1>I do not regret, and I do not shed tears</h1></h1><p>I do not regret, and I do not shed tears,<br/>All, like haze off apple-trees, must pass.<br/>Turning gold, I\'m fading, it appears,<br/>I will not be young again, alas.</p><p>Having got to know the touch of coolness<br/>I will not feel, as before, so good.<br/>And the land of birch trees, - oh my goodness!-<br/>Cannot make me wander barefoot.</p><p>Vagrant\'s spirit! You do not so often<br/>Stir the fire of my lips these days.<br/>Oh my freshness, that begins to soften!<br/>Oh my lost emotions, vehement gaze!</p><p>Presently I do not feel a yearning,<br/>Oh, my life! Have I been sleeping fast?<br/>Well, it feels like early in the morning<br/>On a rosy horse I"ve galloped past.</p><p>We are all to perish, hoping for some favour,<br/>Copper leaves flow slowly down and sway...<br/>May you be redeemed and blessed for ever,<br/>You who came to bloom and pass away...</p>',
		'language_id' => 1,
        'created_at' => $today
      ],[
		'name' => 'The flowers say good-bye to me',
		'text' => '<h1>The flowers say good-bye to me</h1><p>The flowers say good-bye to me,<br/> They bend their heads and bow low down <br/> Which means that I will never see<br/> Her lovely face and my home town.</p><p> Well, that\'s the way it is, my love!<br/> I saw them all in habitation,<br/> I take this deathly trepidation<br/> For tender feeling, still alive.</p><p> I\'ve learnt my life day after day,<br/> I have been living with a smile, and<br/> Thus I invariably say:<br/> In our world all is recurrent.</p><p> Well, some one else will come along,<br/> No grief will sooth the past. The new one, <br/> Perchance, will sing a better song<br/> For the beloved forsaken woman.</p><p> And listening to the song, maybe,<br/> Caressing her endeared lover,<br/> She\'ll probably remember me<br/> As a unique and cherished flower. </p>',
		'language_id' => 1,
        'created_at' => $today
      ],[
		'name' => 'Письмо к матери',
		'text' => '<h1>Письмо к матери</h1><p>Ты жива еще, моя старушка?<br/>Жив и я. Привет тебе, привет!<br/>Пусть струится над твоей избушкой<br/>Тот вечерний несказанный свет.</p><p>Пишут мне, что ты, тая тревогу,<br/>Загрустила шибко обо мне,<br/>Что ты часто ходишь на дорогу<br/>В старомодном ветхом шушуне.</p><p>И тебе в вечернем синем мраке<br/>Часто видится одно и то ж:<br/>Будто кто-то мне в кабацкой драке<br/>Саданул под сердце финский нож.</p><p>Ничего, родная! Успокойся.<br/>Это только тягостная бредь.<br/>Не такой уж горький я пропойца,<br/>Чтоб, тебя не видя, умереть.</p><p>Я по-прежнему такой же нежный<br/>И мечтаю только лишь о том,<br/>Чтоб скорее от тоски мятежной<br/>Воротиться в низенький наш дом.</p><p>Я вернусь, когда раскинет ветви<br/>По-весеннему наш белый сад.<br/>Только ты меня уж на рассвете<br/>Не буди, как восемь лет назад.</p><p>Не буди того, что отмечталось,<br/>Не волнуй того, что не сбылось, -<br/>Слишком раннюю утрату и усталость<br/>Испытать мне в жизни привелось.</p><p>И молиться не учи меня. Не надо!<br/>К старому возврата больше нет.<br/>Ты одна мне помощь и отрада,<br/>Ты одна мне несказанный свет.</p><p>Так забудь же про свою тревогу,<br/>Не грусти так шибко обо мне.<br/>Не ходи так часто на дорогу<br/>В старомодном ветхом шушуне.</p>',
		'language_id' => 3,
        'created_at' => $today
      ]
    ];

    array_map(function($poem){
      DB::table('poems')->insert($poem);
    }, $poems);

  }
}
