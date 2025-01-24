class View
{
    private static array $blocks = []; // Bloklar için
    private static array $data = [];  // Component verileri için

    public static function startBlock(string $name): void
    {
        ob_start();
        self::$blocks[$name] = '';
    }

    public static function endBlock(string $name): void
    {
        if (array_key_exists($name, self::$blocks)) {
            self::$blocks[$name] = ob_get_clean();
        } else {
            ob_end_clean();
        }
    }

    public static function render(string $template, array $data = [])
    {
        extract($data);

        ob_start();
        $templatePath = $_SERVER['DOCUMENT_ROOT'] . "/mvc-architect/app/view/{$template}.php";
        if (file_exists($templatePath)) {
            include $templatePath;
        } else {
            echo "Template {$template}.php not found.";
        }
        $content = ob_get_clean();

        $basePath = $_SERVER['DOCUMENT_ROOT'] . "/mvc-architect/app/view/layout/base.php";
        if (file_exists($basePath)) {
            include $basePath;
        } else {
            echo "Base layout not found.";
        }
    }

    public static function renderComponent(string $component, array $data = []): void
    {
        extract($data);

        $componentPath = $_SERVER['DOCUMENT_ROOT'] . "/mvc-architect/app/view/components/{$component}.php";
        if (file_exists($componentPath)) {
            include $componentPath;
        } else {
            echo "Component {$component}.php not found.";
        }
    }

    public static function showBlock(string $name): void
    {
        echo self::$blocks[$name] ?? '';
    }
}
