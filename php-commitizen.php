<?php
// php-commitizen.php

return [
  /*
   * Define allowed commit “types” (first‐word in commit message).
   * You can reorder, localize, or remove any entry.
   */
  'types' => [
    'feat'     => '✨ A new feature',
    'fix'      => '🐛 A bug fix',
    'docs'     => '📝 Documentation only changes',
    'style'    => '💄 Changes that do not affect the meaning of the code (formatting, missing semicolons, etc.)',
    'refactor' => '♻️ A code change that neither fixes a bug nor adds a feature',
    'perf'     => '⚡️ A code change that improves performance',
    'test'     => '✅ Adding missing tests or correcting existing tests',
    'chore'    => '🔧 Changes to the build process or auxiliary tools/tasks',
  ],

  /*
   * Define allowed “scopes”. Can be empty if you want free‐text scopes.
   */
  'scopes' => [
    'core',
    'ui',
    'db',
    'api',
    'tests',
  ],

  /*
   * If true, php-commitizen will prefix types with their corresponding emoji.
   * If false, it will omit emoji and just use plain text type.
   */
  'useEmojis' => true,

  /*
   * Optionally define a custom map of emojis to types.
   * If you list types above that have no entries here, no emoji will be shown.
   */
  'emojiMap' => [
    'feat'     => '✨',
    'fix'      => '🐛',
    'docs'     => '📝',
    'style'    => '💄',
    'refactor' => '♻️',
    'perf'     => '⚡️',
    'test'     => '✅',
    'chore'    => '🔧',
  ],

  /*
   * If true, php-commitizen will allow you to leave out the body or footer sections.
   */
  'allowEmptyBody'   => true,
  'allowEmptyFooter' => true,

  /*
   * A regular expression that scopes must match. If you leave this null,
   * any scope string is permitted (so long as it’s in the 'scopes' array).
   */
  'scopeValidationPattern' => null,

  /*
   * If true, footer prompts include an explicit "BREAKING CHANGE" question.
   */
  'allowBreakingChanges' => true,
];
