DOCUMENTATION
=============

Get an XML file:

```php
use WBW\Library\XmlTv\Model\Tv;
use WBW\Library\XmlTv\Provider\XmlProvider;

/** @var Tv $tv */
$tv = XmlProvider::getXml("http://path/to/file.xml");
```

Read an XML file:

```php
use WBW\Library\XmlTv\Model\Actor;
use WBW\Library\XmlTv\Model\Adapter;
use WBW\Library\XmlTv\Model\Aspect;
use WBW\Library\XmlTv\Model\Audio;
use WBW\Library\XmlTv\Model\Category;
use WBW\Library\XmlTv\Model\Channel;
use WBW\Library\XmlTv\Model\Colour;
use WBW\Library\XmlTv\Model\Commentator;
use WBW\Library\XmlTv\Model\Composer;
use WBW\Library\XmlTv\Model\Country;
use WBW\Library\XmlTv\Model\Credits;
use WBW\Library\XmlTv\Model\Date;
use WBW\Library\XmlTv\Model\Desc;
use WBW\Library\XmlTv\Model\Director;
use WBW\Library\XmlTv\Model\DisplayName;
use WBW\Library\XmlTv\Model\Editor;
use WBW\Library\XmlTv\Model\EpisodeNum;
use WBW\Library\XmlTv\Model\Guest;
use WBW\Library\XmlTv\Model\Icon;
use WBW\Library\XmlTv\Model\Keyword;
use WBW\Library\XmlTv\Model\Language;
use WBW\Library\XmlTv\Model\LastChance;
use WBW\Library\XmlTv\Model\Length;
use WBW\Library\XmlTv\Model\OrigLanguage;
use WBW\Library\XmlTv\Model\Premiere;
use WBW\Library\XmlTv\Model\Present;
use WBW\Library\XmlTv\Model\Presenter;
use WBW\Library\XmlTv\Model\PreviouslyShown;
use WBW\Library\XmlTv\Model\Producer;
use WBW\Library\XmlTv\Model\Programme;
use WBW\Library\XmlTv\Model\Quality;
use WBW\Library\XmlTv\Model\Rating;
use WBW\Library\XmlTv\Model\Review;
use WBW\Library\XmlTv\Model\SecondaryTitle;
use WBW\Library\XmlTv\Model\StarRating;
use WBW\Library\XmlTv\Model\Stereo;
use WBW\Library\XmlTv\Model\Subtitles;
use WBW\Library\XmlTv\Model\Title;
use WBW\Library\XmlTv\Model\Tv;
use WBW\Library\XmlTv\Model\Url;
use WBW\Library\XmlTv\Model\Value;
use WBW\Library\XmlTv\Model\Video;
use WBW\Library\XmlTv\Model\Writer;
use WBW\Library\XmlTv\Provider\XmlProvider;

/** @var Tv $tv */
$tv = XmlProvider::readXml("/path/to/file.xml");

/** @var Channel $channel */
foreach($tv->getChannels() as $channel) {

    $channel->getId();

    /** @var DisplayName $displayName */
    foreach($channel->getDisplayNames() as $displayName) {

        $displayName->getContent();
        $displayName->getLang();
    }

    /** @var Icon $icon */
    foreach($channel->getIcons() as $icon) {

        $icon->getSrc();
        $icon->getWidth(); // int
        $icon->getHeight(); // int
    }

    /** @var Url $url */
    foreach($channel->getUrls() as $url) {

        $url->getContent();
    }

    /** @var Programme $programme */
    foreach($channel->getProgrammes() as $programme) {

        $programme->getChannel();
        $programme->getClumpIdx();
        $programme->getNew(); // bool
        $programme->getPdcStart();
        $programme->getShowView();
        $programme->getStart();
        $programme->getStop();
        $programme->getVideoPlus();
        $programme->getVpsStart();

        /** @var Audio $audio */
        $audio = $programme->getAudio();
        $audio->getPresent()->getContent();
        $audio->getStereo()->getContent();

        /** @var Credits $credits */
        $credits = $programme->getCredits();
        
        /** @var Actor $actor */
        foreach($credits->getActors() as $actor) {

            $actor->getContent();
            $actor->getRole();
        }
        
        /** @var Adapter $adapter */
        foreach($credits->getAdapters() as $adapter) {

            $adapter->getContent();
        }
        
        /** @var Commentator $commentator */
        foreach($credits->getCommentators() as $commentator) {

            $commentator->getContent();
        }
        
        /** @var Composer $composer */
        foreach($credits->getComposers() as $composer) {

            $composer->getContent();
        }
        
        /** @var Director $director */
        foreach($credits->getDirectors() as $director) {

            $director->getContent();
        }
        
        /** @var Editor $editor */
        foreach($credits->getEditors() as $editor) {

            $editor->getContent();
        }
        
        /** @var Guest $guest */
        foreach($credits->getGuests() as $guest) {

            $guest->getContent();
        }
        
        /** @var Presenter $presenter */
        foreach($credits->getPresenters() as $presenter) {

            $presenter->getContent();
        }
        
        /** @var Producer $producer */
        foreach($credits->getProducers() as $producer) {

            $producer->getContent();
        }
        
        /** @var Writer $writer */
        foreach($credits->getWriters() as $writer) {

            $writer->getContent();
        }

        /** @var Date $date */
        $date = $programme->getDate();
        $date->getContent();

        /** @var Language $language */
        $language = $programme->getLanguage();
        $language->getContent();
        $language->getLang();

        /** @var LastChance $lastChance */
        $lastChance = $programme->getLastChance();
        $lastChance->getContent();
        $lastChance->getLang();

        /** @var Length $length */
        $length = $programme->getLength();
        $length->getContent(); // float
        $length->getUnits();
        
        /** @var Premiere $premiere */
        $premiere = $programme->getPremiere();
        $premiere->getContent();
        $premiere->getLang();
        
        /** @var PreviouslyShown $previouslyShown */
        $previouslyShown = $programme->getPreviouslyShown();
        $previouslyShown->getChannel();
        $previouslyShown->getStart();
        
        /** @var Video $video */
        $video = $programme->getVideo();
        $video->getAspect()->getContent();
        $video->getColour()->getContent();
        $video->getPresent()->getContent();
        $video->getQuality()->getContent();
        
        /** @var Categorie $category */
        foreach($programme->getCategories() as $category) {

            $category->getContent();
            $category->getLang();
        }
        
        /** @var Country $country */
        foreach($programme->getCountries() as $country) {

            $country->getContent();
            $country->getLang();
        }
        
        /** @var Desc $desc */
        foreach($programme->getDescs() as $desc) {

            $desc->getContent();
            $desc->getLang();
        }
        
        /** @var EpisodeNum $episodeNum */
        foreach($programme->getEpisodeNums() as $episodeNum) {

            $episodeNum->getContent();
            $episodeNum->getSystem();
        }
        
        /** @var Icon $icon */
        foreach($programme->getIcons() as $icon) {
            // ...
        }
        
        /** @var Keyword $keyword */
        foreach($programme->getKeywords() as $keyword) {

            $keyword->getContent();
            $keyword->getLang();
        }
        
        /** @var Rating $rating */
        foreach($programme->getRatings() as $rating) {
            
            $rating->getSystem();
            $rating->getValue()->getContent();
            
            /** @var Icon $icon */
            foreach($rating->getIcons() as $icon) {
                // same as $channel->getIcons()
            }
        }
        
        /** @var Review $review */
        foreach($programme->getReviews() as $review) {

            $review->getLang();
            $review->getReviewer();
            $review->getSource();
            $review->getType();
        }
                
        /** @var SecondaryTitle $secondaryTitle */
        foreach($programme->getSecondaryTitles() as $secondaryTitle) {

            $secondaryTitle->getContent();
            $secondaryTitle->getLang();
        }
        
        /** @var StarRating $starRating */
        foreach($programme->getStarRatings() as $starRating) {

            $starRating->getValue()->getContent();
            
            /** @var Icon $icon */
            foreach($starRating->getIcons() as $icon) {
                // same as $channel->getIcons()
            }
        }
        /** @var Subtitles $subtitles */
        foreach($programme->getSubtitles() as $subtitles) {

            $subtitles->getType();
            $subtitles->getLanguage()->getContent();
            $subtitles->getLanguage()->getLang();
        }
        
        /** @var Title $title */
        foreach($programme->getTitles() as $title) {

            $title->getContent();
            $title->getLang();
        }
        
        /** @var Url $url */
        foreach($programme->getUrls() as $url) {
            // same as $channel->getUrls()
        }
    }
}
```

Stat an XML file:

```php
use WBW\Library\XmlTv\Provider\XmlProvider;
use WBW\Library\XmlTv\Statistic\Statistics;

/** @var Statistics $statistics */
$statistics = XmlProvider::statXml("/path/to/file.xml");
```

Write an XML file:

```php
use WBW\Library\XmlTv\Model\Tv;
use WBW\Library\XmlTv\Provider\XmlProvider;

/** @var Tv $tv */
XmlProvider::writeXml($tv ,"/path/to/file.xml");
```
