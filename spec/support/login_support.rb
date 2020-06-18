# frozen_string_literal: true

module LoginSupport
  def valid_login(user)
    visit root_path
    click_link 'ログイン'
    fill_in 'session[email]', with: user.email
    fill_in 'session[password]', with: user.password
    click_button 'ログイン'
  end
  end

RSpec.configure do |config|
  config.include LoginSupport
end
