<?php
/**
 * Created by PhpStorm.
 * User: Sylvain
 * Date: 29/09/2018
 * Time: 11:40
 */

require_once './vendor/autoload.php';

use RPG\models\Player;

$loader = new Twig_Loader_Filesystem('./views');

// dont forget to remove the cache files if the page dosnt refresh anymore.

$twig = new Twig_Environment($loader, array(/* TODO : DISABLE FOR DEV
        'cache' => './var/cache',
    */
));


/**
 * Entrance point - Init the game board
 * Class Init
 */
class Init
{
    private $twig;

    protected $GAME_TITLE = "JOLY Sylvain - RPG";

    /**
     * Theme display - TODO
     * @var string
     */
    protected $GAME_THEME = ""; //default Classic
    protected $GAME_FORMAT = ""; // default Medium

    public function __construct(Twig_Environment $twig, string $GAME_THEME, string $GAME_FORMAT)
    {
        $this->twig = $twig;
        $this->GAME_THEME = $GAME_THEME;
        $this->GAME_FORMAT = $GAME_FORMAT;
    }

    /**
     * Return Game title from Init class
     * @return string
     */
    public function getGameTitle(): string
    {
        return $this->GAME_TITLE;
    }

    public function getGameFormat(): string
    {
        return $this->GAME_FORMAT;
    }

    public function getGameTheme(): string
    {
        return $this->GAME_THEME;
    }


    public function generateBoard(): array
    {
        $board = [];
        var_dump($this->getGameFormat());

            $format = $this->getGameFormat();

            switch ($format) {
                case "medium":
                    //$test[x][y] 0 1 0 2 0 3 etc x row y column
                    // x ============ y |
                    //                  |
                    $board = array(
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11),
                    );
                    break;
            }

        return $board;
    }

    /**
     * Init game board
     * @throws Twig_Error_Loader
     * @throws Twig_Error_Runtime
     * @throws Twig_Error_Syntax
     */
    public function initGame()
    {
            echo $this->twig->render('map.html', [
                'game_title' => $this->getGameTitle(),
                'board' => $this->generateBoard(),
                'theme' => $this->getGameTheme()
            ]);
    }


}


$game = new Init($twig, "Classic", "medium");


//start the game
try {
    $game->initGame();
} catch (Twig_Error_Loader $e) {
} catch (Twig_Error_Runtime $e) {
} catch (Twig_Error_Syntax $e) {
}

