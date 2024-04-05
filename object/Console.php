<?php
class Console {
    const READLINE_MAX_LENGTH = 0xFFFF;
    const WRITELINE_NEWLINE = "\n";

    private static /*Resource*/ $stdin;
    private static /*Resource*/ $stdout;

    public static function /*void*/ close () {
        fclose(self::$stdin);
        fclose(self::$stdout);
    }

    public static function /*void*/ open () {
        self::$stdin = fopen('php://stdin', 'r');
        self::$stdout = fopen('php://stdout', 'w');
    }

    public static function /*string*/ readLine () {
        return stream_get_line(self::$stdin, self::READLINE_MAX_LENGTH, "\r\n");
    }

    public static function /*void*/ writeLine (/*string*/ $str) {
        fwrite(self::$stdout, $str);
        fwrite(self::$stdout, self::WRITELINE_NEWLINE);
    }
}