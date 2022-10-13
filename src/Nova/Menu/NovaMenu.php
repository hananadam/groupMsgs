<?PHP

namespace Wloop\GroupMessages\Nova\Menu;

use Wloop\GroupMessages\Nova\Contact;
use Wloop\GroupMessages\Nova\Group;
use DigitalCreative\CollapsibleResourceManager\CollapsibleResourceManager;
use DigitalCreative\CollapsibleResourceManager\Resources\NovaResource;
use DigitalCreative\CollapsibleResourceManager\Resources\TopLevelResource;
use Dive\NovaTranslationEditor\NovaTranslationEditor;
use Joedixon\NovaTranslation\NovaTranslation;
use Voicecode\LaravelNovaTranslationsManager\LaravelNovaTranslationsManager;

class NovaMenu
{
    public static function showMenu()
    {
        return [

            new CollapsibleResourceManager([
                'remember_menu_state' => true, // default
                'navigation' => [
                   
                    TopLevelResource::make([
                        'expanded' => false,
                        'label' => 'الرسائل الجماعية',
                        'icon' => "<i class='fa fa-envelope'></i>", // HTML/SVG string or callback that produces one, see below
                        'resources' => [
                            Group::class,
                            Contact::class,
                        ],
                    ]),
                ],
            ]),

        ];
    }
}
