<?php
/**
 * Created by PhpStorm.
 * User: fwarniez
 * Date: 3/25/2014
 * Time: 12:20 AM
 */

namespace Fabien\PlayerManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Fabien\PlayerManagerBundle\Entity\League;
use Fabien\PlayerManagerBundle\Entity\Player;
use Fabien\PlayerManagerBundle\Entity\Team;

class LoadLeagueData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $leagues = array(
            array(
                'name' => 'Major League Soccer',
                'slug' => 'major-league-soccer',
                'logo-file-name' => 'leagues/major-league-soccer.jpg',
                'teams' => array(
                    array(
                        'name' => 'Chicago Fire',
                        'slug' => 'chicago-fire',
                        'logo-file-name' => 'mls/chicago-fire.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Columbus Crew',
                        'slug' => 'columbus-crew',
                        'logo-file-name' => 'mls/columbus-crew.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'D.C. United',
                        'slug' => 'dc-united',
                        'logo-file-name' => 'mls/dc-united.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Houston Dynamo',
                        'slug' => 'houston-dynamo',
                        'logo-file-name' => 'mls/houston-dynamo.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Montreal Impact',
                        'slug' => 'montreal-impact',
                        'logo-file-name' => 'mls/montreal-impact.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'New England Revolution',
                        'slug' => 'new-england-revolution',
                        'logo-file-name' => 'mls/new-england-revolution.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'New York Red Bulls',
                        'slug' => 'new-york-red-bulls',
                        'logo-file-name' => 'mls/new-york-red-bulls.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Philadelphia Union',
                        'slug' => 'philadelphia-union',
                        'logo-file-name' => 'mls/philadelphia-union.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Sporting Kansas City',
                        'slug' => 'sporting-kansas-city',
                        'logo-file-name' => 'mls/sporting-kansas-city.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Toronto FC',
                        'slug' => 'toronto-fc',
                        'logo-file-name' => 'mls/toronto-fc.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Chivas USA',
                        'slug' => 'chivas-usa',
                        'logo-file-name' => 'mls/chivas-usa.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Colorado Rapids',
                        'slug' => 'colorado-rapids',
                        'logo-file-name' => 'mls/colorado-rapids.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'FC Dallas',
                        'slug' => 'fc-dallas',
                        'logo-file-name' => 'mls/fc-dallas.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Los Angeles Galaxy',
                        'slug' => 'los-angeles-galaxy',
                        'logo-file-name' => 'mls/los-angeles-galaxy.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Portland Timbers',
                        'slug' => 'portland-timbers',
                        'logo-file-name' => 'mls/portland-timbers.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Real Salt Lake',
                        'slug' => 'real-salt-lake',
                        'logo-file-name' => 'mls/real-salt-lake.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'San Jose Earthquakes',
                        'slug' => 'san-jose-earthquakes',
                        'logo-file-name' => 'mls/san-jose-earthquakes.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Seattle Sounders FC',
                        'slug' => 'seattle-sounders-fc',
                        'logo-file-name' => 'mls/seattle-sounders-fc.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Whitecaps FC',
                        'slug' => 'whitecaps-fc',
                        'logo-file-name' => 'mls/whitecaps-fc.jpg',
                        'players' => array(
                            array(
                                'first_name' => 'Jordan',
                                'last_name' => 'Harvey',
                                'number' => 2,
                                'designated_player' => false
                            ),
                            array(
                                'first_name' => 'Jay',
                                'last_name' => 'DeMerit',
                                'number' => 6,
                                'designated_player' => false
                            ),
                            array(
                                'first_name' => 'Kenny',
                                'last_name' => 'Miller',
                                'number' => 9,
                                'designated_player' => true
                            )
                        )
                    )
                )
            ),
            array(
                'name' => 'Ligue 1',
                'slug' => 'ligue-1',
                'logo-file-name' => 'leagues/ligue-1.jpg',
                'teams' => array()
            ),
            array(
                'name' => 'Bundesliga',
                'slug' => 'bundesliga',
                'logo-file-name' => 'leagues/bundesliga.jpg',
                'teams' => array()
            ),
            array(
                'name' => 'Barclays Premier League',
                'slug' => 'barclays-premier-league',
                'logo-file-name' => 'leagues/barclays-premier-league.jpg',
                'teams' => array(
                    array(
                        'name' => 'Arsenal',
                        'slug' => 'arsenal',
                        'logo-file-name' => 'bpl/arsenal.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Aston Villa',
                        'slug' => 'aston-villa',
                        'logo-file-name' => 'bpl/aston-villa.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Cardiff City',
                        'slug' => 'cardiff-city',
                        'logo-file-name' => 'bpl/cardiff-city.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Chelsea',
                        'slug' => 'chelsea',
                        'logo-file-name' => 'bpl/chelsea.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Crystal Palace',
                        'slug' => 'crystal-palace',
                        'logo-file-name' => 'bpl/crystal-palace.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Everton',
                        'slug' => 'everton',
                        'logo-file-name' => 'bpl/everton.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Fulham',
                        'slug' => 'fulham',
                        'logo-file-name' => 'bpl/fulham.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Hull City',
                        'slug' => 'hull-city',
                        'logo-file-name' => 'bpl/hull-city.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Liverpool',
                        'slug' => 'liverpool',
                        'logo-file-name' => 'bpl/liverpool.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Manchester City',
                        'slug' => 'manchester-city',
                        'logo-file-name' => 'bpl/manchester-city.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Manchester United',
                        'slug' => 'manchester-united',
                        'logo-file-name' => 'bpl/manchester-united.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Newcastle United',
                        'slug' => 'newcastle-united',
                        'logo-file-name' => 'bpl/newcastle-united.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Norwich City',
                        'slug' => 'norwich-city',
                        'logo-file-name' => 'bpl/norwich-city.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Sunderland',
                        'slug' => 'sunderland',
                        'logo-file-name' => 'bpl/sunderland.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Swansea City',
                        'slug' => 'swansea-city',
                        'logo-file-name' => 'bpl/swansea-city.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'Tottenham Hotspur',
                        'slug' => 'tottenham-hotspur',
                        'logo-file-name' => 'bpl/tottenham-hotspur.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'West Bromwich Albion',
                        'slug' => 'west-bromwich-albion',
                        'logo-file-name' => 'bpl/west-bromwich-albion.jpg',
                        'players' => array()
                    ),
                    array(
                        'name' => 'West Ham United',
                        'slug' => 'west-ham-united',
                        'logo-file-name' => 'bpl/west-ham-united.jpg',
                        'players' => array()
                    )
                )
            )
        );

        foreach ($leagues as $league)
        {
            $managedLeague = new League();
            $managedLeague->setName($league['name']);
            $managedLeague->setSlug($league['slug']);
            if (isset($league['logo-file-name']))
            {
                $managedLeague->setLogoFileName($league['logo-file-name']);
            }

            foreach ($league['teams'] as $team)
            {
                $managedTeam = new Team();
                $managedTeam->setName($team['name']);
                $managedTeam->setSlug($team['slug']);
                if (isset($team['logo-file-name']))
                {
                    $managedTeam->setLogoFileName($team['logo-file-name']);
                }

                foreach ($team['players'] as $player)
                {
                    $managedPlayer = new Player();
                    $managedPlayer->setFirstName($player['first_name']);
                    $managedPlayer->setLastName($player['last_name']);
                    $managedPlayer->setNumber($player['number']);
                    $managedPlayer->setDesignatedPlayer($player['designated_player']);

                    $manager->persist($managedPlayer);

                    $managedPlayer->setTeam($managedTeam);
                }

                $manager->persist($managedTeam);

                $managedTeam->setLeague($managedLeague);
            }

            $manager->persist($managedLeague);
        }

        $manager->flush();
    }
} 