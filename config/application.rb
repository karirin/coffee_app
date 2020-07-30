require_relative 'boot'

require 'rails/all'

Bundler.require(*Rails.groups)

module CoffeeApp
  class Application < Rails::Application
    config.i18n.default_locale = :ja
    config.load_defaults 5.1
    config.autoload_paths += Dir[Rails.root.join('app', 'uploaders')]
    config.action_view.embed_authenticity_token_in_remote_forms = true
    config.generators do |g|
      g.test_framework :rspec,
                       view_specs: false,
                       helper_specs: false,
                       controller_specs: false,
                       routing_specs: false
    end
  end
end
