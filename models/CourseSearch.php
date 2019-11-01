<?php
namespace app\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Course;
/**
 * CourseSearch represents the model behind the search form of `app\models\Course`.
 */
class CourseSearch extends Course
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['course', 'slug', 'description', 'image', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'safe'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Course::find();
        // add conditions that should always apply here
        $query->joinWith(['createdBy as user_created' => function ($q) {
            $q->andFilterWhere(['=', 'user_created.username', $this->createdBy]);
        }]);
        $query->joinWith(['updatedBy as user_updated' => function ($q) {
            $q->andFilterWhere(['=', 'user_updated.username', $this->updatedBy]);
        }]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'  => [
                'defaultOrder'  => [
                    'course'  => SORT_ASC,
                ],
                'attributes' => [
                    'course',
                    'description',
                    'created_by'   => [
                        'asc'   => ['user_created.name' => SORT_ASC],
                        'desc'   => ['user_created.name' => SORT_DESC],
                    ],
                    'updated_by'   => [
                        'asc'   => ['user_updated.name' => SORT_ASC],
                        'desc'   => ['user_updated.name' => SORT_DESC],
                    ],
                ],
            ],
        ]);
        $this->load($params);
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
//            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
//            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);
        $query->andFilterWhere(['like', 'course', $this->course])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'user_created.name', $this->created_by])
            ->andFilterWhere(['like', 'user_updated.name', $this->updated_by]);
        return $dataProvider;
    }
}