# frozen_string_literal: true

class Like < ApplicationRecord
  belongs_to :post, optional: true
  belongs_to :user, optional: true
  validates_uniqueness_of :post_id, scope: :user_id
end
